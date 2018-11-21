<?php

namespace App\Repositories;

use App\Models\jornada;
use InfyOm\Generator\Common\BaseRepository;

class jornadaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'jornada'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return jornada::class;
    }
}
