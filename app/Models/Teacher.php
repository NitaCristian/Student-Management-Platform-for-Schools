<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 * @package App\Models
 * @version August 18, 2020, 6:19 pm UTC
 *
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $attendances
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $phone
 * @property string $country
 * @property boolean $status
 * @property integer $user_id
 * @property string $image
 */
class Teacher extends Model
{
    use SoftDeletes;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'phone',
        'country',
        'status',
        'user_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'status' => 'boolean',
        'user_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'phone' => 'nullable|string|max:255',
        'country' => 'required|string|max:255',
        'status' => 'required|boolean',
        'user_id' => 'required',
        'image' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function attendances()
    {
        return $this->hasMany(\App\Models\Attendance::class, 'teacher_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function schedules()
    {
        return $this->hasMany(\App\Models\Schedule::class, 'teacher_id');
    }
}
