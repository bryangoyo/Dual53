<?php

namespace App\Repositories;

use App\Models\industria;
use InfyOm\Generator\Common\BaseRepository;

class industriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'cif',
        'direccion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return industria::class;
    }
}
