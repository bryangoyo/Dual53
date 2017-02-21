<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class oferta
 * @package App\Models
 * @version February 17, 2017, 7:28 pm UTC
 */
class oferta extends Model
{
    use SoftDeletes;

    public $table = 'ofertas';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'id_empresa',
        'dataEntrada',
        'DescOferta',
        'DescOfertaBreu',
        'id_sector'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_empresa' => 'integer',
        'dataEntrada' => 'string',
        'DescOferta' => 'string',
        'DescOfertaBreu' => 'string',
        'id_sector' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empresa' => 'required',
        'dataEntrada' => 'required',
        'DescOferta' => 'required',
        'DescOfertaBreu' => 'PersonaContacto string text',
        'id_sector' => 'required'
    ];

    
}
