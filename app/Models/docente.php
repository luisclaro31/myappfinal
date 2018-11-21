<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class docente
 * @package App\Models
 * @version November 19, 2018, 3:47 pm UTC
 */
class docente extends Model
{
    use SoftDeletes;

    public $table = 'docentes';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'profesion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'nombre' => 'string',
        'apellido' => 'string',
        'email' => 'string',
        'telefono' => 'string',
        'profesion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'email',
        'telefono' => 'numeric'
    ];

    public function profesions(){

      return $this->belongsTo('App\Models\profesion','profesion_id');
    }
    


}
