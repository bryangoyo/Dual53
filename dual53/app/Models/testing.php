<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class testing
 * @package App\Models
 * @version February 16, 2017, 4:47 pm UTC
 */
class testing extends Model
{
    use SoftDeletes;

    public $table = 'testings';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'test',
        'num'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'test' => 'string',
        'num' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'test' => 'required',
        'num' => 'numeric'
    ];

    
}
