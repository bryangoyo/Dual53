<?php

namespace App\Repositories;

use App\Models\testing;
use InfyOm\Generator\Common\BaseRepository;

class testingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'test',
        'num'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return testing::class;
    }
}
