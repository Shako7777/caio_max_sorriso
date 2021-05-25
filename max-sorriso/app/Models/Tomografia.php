<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tomografia extends Model
{
    use HasFactory;
    public $fillable = ['caso_id', 'codigo_projeto', 'espessura_tc', 'nome_arquivo', 'pasta_arquivo'];
}
