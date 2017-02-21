<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class industria
 * @package App\Models
 * @version February 16, 2017, 4:42 pm UTC
 */
class industria extends Model
{
    use SoftDeletes;

    public $table = 'industrias';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'cif',
        'direccion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nombre' => 'string',
        'cif' => 'string',
        'direccion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombre' => 'required',
        'cif' => 'required',
        'direccion' => 'required'
    ];

    
}
