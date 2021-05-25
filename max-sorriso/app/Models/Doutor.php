<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doutor extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'doutores';

    public $fillable = ['nome', 'email', 'telefone', 'data_nascimento', 'uf', 'crm'];

    protected $appends = ['data_nascimento'];
    public function getDataNascimentoAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['data_nascimento']));
    }
}
