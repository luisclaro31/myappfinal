<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class tipocontrato
 * @package App\Models
 * @version November 20, 2018, 3:31 pm UTC
 */
class tipocontrato extends Model
{
    use SoftDeletes;

    public $table = 'tipocontratos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required'
    ];

    
}
