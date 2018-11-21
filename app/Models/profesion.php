<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class profesion
 * @package App\Models
 * @version November 19, 2018, 3:36 pm UTC
 */
class profesion extends Model
{
    use SoftDeletes;

    public $table = 'profesions';


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

    public function docentes(){

      return $this->hasMany('App\Models\docentes');
    }


}
