<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    use HasFactory;
    public $fillable = ['doutor_id', 'paciente_id', 'codigo_caso', 'data_cirurgia', 'status'];

    public function doutor()
    {
        return $this->belongsTo(Doutor::class);
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function tomografia()
    {
        return $this->hasOne(Tomografia::class);
    }

    protected $appends = ['data_cirurgia'];
    public function getDataCirurgiaAttribute()
    {
        return date('d/m/Y', strtotime($this->attributes['data_cirurgia']));
    }
}
