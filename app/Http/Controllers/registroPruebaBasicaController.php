<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistro;
use App\Models\feriaNovili\Registro;
use Illuminate\Support\Facades\Storage;

class registroPruebaBasicaController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function exito()
    {
        return view('exito');
    }
    
    public function store(StoreRegistro $request)
    {
        $imageName=Str::random(20).'.'.$request['foto']->getClientOriginalExtension();      
        Storage::disk('public')->put("$imageName",$request['foto']);
        $request['foto']->move(public_path("/image"),$imageName);
      
        $registro=new Registro();
        $registro->nombre=$request['nombre'];
        $registro->email=$request['email'];
        $registro->telefono=$request['telefono'];
        $registro->fechaNacimiento=$request['fechaNacimiento'];
        $registro->foto=$imageName;
        $registro->save();

    
        $this->sendMail($registro);

        return redirect('exito');
    }

     //enviar correo  
     private function sendMail($data)
     {
 
         Mail::send('email.registro', ['datos'=>$data], function ($message) use ($data){
             $message->to($data->email, 'registro prueba basica iderf de correo ')
                 ->subject("Confirmación de registro ");
         });
     }
}









