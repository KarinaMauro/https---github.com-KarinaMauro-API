<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetidorModel extends Model
{
    use HasFactory;

    protected $table = "competidor";

    protected $fillable = [
        'nome' , 
        'idade' , 
        'altura' , 
        'peso' , 
        'sexo' , 
        'cpf' , 
        'rg' , 
        'equipe' , 
    ];
}
