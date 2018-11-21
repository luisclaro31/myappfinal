<?php

namespace App\Repositories;

use App\Models\tipocontrato;
use InfyOm\Generator\Common\BaseRepository;

class tipocontratoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return tipocontrato::class;
    }
}
