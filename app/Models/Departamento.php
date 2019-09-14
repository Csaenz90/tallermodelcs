<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';

    protected $fillable = [
        'nombre_departamento',
        'opciones'
    ];

    protected $casts = ['opciones' => 'array'];

    protected $appends = ['nombre_codigo', 'list_municipios'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function getNombreCodigoAttribute()
    {
        return "{$this->id} {$this->nombre_departamento}";
    }

    public function getListMunicipiosAttribute()
    {
        return $this->municipios;
    }

    public function setNombreDepartamentoAttribute($value)
    {
        $this->attributes['nombre_departamento'] = strtoupper($value);
    }



}
