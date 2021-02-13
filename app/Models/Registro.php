<?php

namespace App\Models\feriaNovili;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=['id','nombre','email','telefono','fechaNacimiento','foto'];

}
