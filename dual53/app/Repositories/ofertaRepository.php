<?php

namespace App\Repositories;

use App\Models\oferta;
use InfyOm\Generator\Common\BaseRepository;

class ofertaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_empresa',
        'dataEntrada',
        'DescOferta',
        'DescOfertaBreu',
        'id_sector'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return oferta::class;
    }
}
