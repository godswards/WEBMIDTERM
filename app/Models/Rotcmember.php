<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Rotcmember
 * @package App\Models
 * @version October 28, 2021, 8:40 am UTC
 *
 * @property string $fname
 * @property string $lname
 * @property string $birthday
 * @property string $rank
 */
class Rotcmember extends Model
{
    // use SoftDeletes;

    use HasFactory;

    public $table = 'rotcmember';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fname',
        'lname',
        'birthday',
        'rank'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fname' => 'string',
        'lname' => 'string',
        'birthday' => 'date',
        'rank' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fname' => 'nullable|string|max:100',
        'lname' => 'nullable|string|max:100',
        'birthday' => 'nullable',
        'rank' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
