<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicadore
 *
 * @property $id
 * @property $nombreIndicador
 * @property $codigoIndicador
 * @property $unidadMedidaIndicador
 * @property $valorIndicador
 * @property $fechaIndicador
 * @property $tiempoIndicador
 * @property $origenIndicador
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Indicadore extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreIndicador','codigoIndicador','unidadMedidaIndicador','valorIndicador','fechaIndicador','tiempoIndicador','origenIndicador'];



}
