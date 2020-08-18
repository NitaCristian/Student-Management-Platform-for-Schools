<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Shift
 * @package App\Models
 * @version August 18, 2020, 6:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $assignments
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property string $shift
 */
class Shift extends Model
{
    use SoftDeletes;

    public $table = 'shifts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'shift'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'shift' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'shift' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function assignments()
    {
        return $this->hasMany(\App\Models\Assignment::class, 'shift_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function schedules()
    {
        return $this->hasMany(\App\Models\Schedule::class, 'shift_id');
    }
}
