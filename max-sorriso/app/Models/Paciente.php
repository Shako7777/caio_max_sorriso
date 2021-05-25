<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    public $fillable = ['nome', 'email', 'telefone', 'data_nascimento'];

    protected $appends = ['data_nascimento'];
    public function getDataNascimentoAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['data_nascimento']));
    }
}
