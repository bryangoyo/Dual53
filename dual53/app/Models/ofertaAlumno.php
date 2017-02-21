<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ofertaAlumno
 * @package App\Models
 * @version February 17, 2017, 7:37 pm UTC
 */
class ofertaAlumno extends Model
{
    use SoftDeletes;

    public $table = 'oferta_alumnos';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'idOferta'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idOferta' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idOferta' => 'numeric'
    ];

    
}
