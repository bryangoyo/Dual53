<?php

namespace App\Repositories;

use App\Models\ofertaAlumno;
use InfyOm\Generator\Common\BaseRepository;

class ofertaAlumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idOferta'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ofertaAlumno::class;
    }
}
