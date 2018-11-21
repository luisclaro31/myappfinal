<?php

namespace App\Repositories;

use App\Models\docente;
use InfyOm\Generator\Common\BaseRepository;

class docenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'nombre',
        'apellido',
        'email',
        'telefono',
        'profesion_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return docente::class;
    }
}
