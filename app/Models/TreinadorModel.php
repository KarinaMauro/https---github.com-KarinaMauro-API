<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreinadorModel extends Model
{
    use HasFactory;

    protected $table = "treinador";

    protected $fillable = [
        'nome' , 
        'idade' , 
        'altura' , 
        'peso' , 
        'cpf' , 
        'rg' , 
    ];
}
