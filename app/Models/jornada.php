<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class jornada
 * @package App\Models
 * @version November 20, 2018, 3:42 pm UTC
 */
class jornada extends Model
{
    use SoftDeletes;

    public $table = 'jornadas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'codigo',
        'jornada'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'codigo' => 'string',
        'jornada' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'jornada' => 'required'
    ];

    
}
