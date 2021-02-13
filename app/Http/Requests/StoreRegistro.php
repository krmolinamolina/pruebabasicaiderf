<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|string',
            'email'=>'required|email',
            'telefono'=>'required|string',
            'fechaNacimiento'=>'required',
            'foto'=>'required',
            ];
    }
    public function messages()
    {
        return[
            'nombre.required'=>'Este campo es requerido.',
            'nombre.string'=>'El valor no es correcto.',
            
            'empresa.required'=>'Este campo es requerido.',
            'empresa.string'=>'El valor no es correcto.',
            'email.required'=>'Este campo es requerido.',
            'email.email'=>'por favor ingrese un correo valido.',
            'fechaNacimiento.required'=>'Este campo es requerido.',
            'foto.required'=>'Este campo es requerido.',
        ];
    }
}


 
