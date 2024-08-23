<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalidadeModel extends Model
{
    use HasFactory;

    protected $table = "localidade";

    protected $fillable = [
        'rua' , 
        'bairro' , 
        'número' , 
        'cep' , 
        'cidade' , 
        'estado' , 
        'país' , 
    ];
}
