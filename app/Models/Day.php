<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Day
 * @package App\Models
 * @version August 18, 2020, 6:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $assignments
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property string $name
 */
class Day extends Model
{
    use SoftDeletes;

    public $table = 'days';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function assignments()
    {
        return $this->hasMany(\App\Models\Assignment::class, 'day_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function schedules()
    {
        return $this->hasMany(\App\Models\Schedule::class, 'day_id');
    }
}
