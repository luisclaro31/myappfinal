<?php

namespace App\Repositories;

use App\Models\profesion;
use InfyOm\Generator\Common\BaseRepository;

class profesionRepository extends BaseRepository
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
        return profesion::class;
    }
}
