<?php

namespace App\Repositories;

use App\Models\contrato;
use InfyOm\Generator\Common\BaseRepository;

class contratoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return contrato::class;
    }
}
