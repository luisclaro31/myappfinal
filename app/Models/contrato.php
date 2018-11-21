<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class contrato
 * @package App\Models
 * @version November 20, 2018, 3:57 pm UTC
 */
class contrato extends Model
{
    use SoftDeletes;

    public $table = 'contratos';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'numerocontrato',
        'horascontratada',
        'fechainicio',
        'fechafin',
        'docente_id',
        'tipocontrato_id',
        'jornadas_id',
        'asignaturas_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'numerocontrato' => 'string',
        'horascontratada' => 'string',
        'fechainicio' => 'date',
        'fechafin' => 'date',
        'docente_id' => 'integer',
        'tipocontrato_id' => 'integer',
        'jornadas_id' => 'integer',
        'asignaturas_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numerocontrato' => 'required',
        'horascontratada' => 'required',
        'fechainicio' => 'date',
        'fechafin' => 'date',
        'docente_id' => 'required',
        'tipocontrato_id' => 'required',
        'jornadas_id' => 'required',
        'asignaturas_id' => 'required'
    ];

    public function Tipocontrato(){
       return $this->belongsTo('App\Models\tipocontrato','tipocontrato_id');
    }


}
