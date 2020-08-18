<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 * @package App\Models
 * @version August 18, 2020, 6:22 pm UTC
 *
 * @property \App\Models\Class $class
 * @property \App\Models\User $user
 * @property \Illuminate\Database\Eloquent\Collection $attendances
 * @property \Illuminate\Database\Eloquent\Collection $transactions
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $mother_name
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property boolean $status
 * @property integer $user_id
 * @property integer $class_id
 * @property string $image
 */
class Student extends Model
{
    use SoftDeletes;

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'mother_name',
        'gender',
        'email',
        'phone',
        'country',
        'status',
        'user_id',
        'class_id',
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
        'father_name' => 'string',
        'mother_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'country' => 'string',
        'status' => 'boolean',
        'user_id' => 'integer',
        'class_id' => 'integer',
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
        'father_name' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'phone' => 'nullable|string|max:255',
        'country' => 'required|string|max:255',
        'status' => 'required|boolean',
        'user_id' => 'required',
        'class_id' => 'required',
        'image' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function class()
    {
        return $this->belongsTo(\App\Models\Classes::class, 'class_id');
    }

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
        return $this->hasMany(\App\Models\Attendance::class, 'student_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function transactions()
    {
        return $this->hasMany(\App\Models\Transaction::class, 'student_id');
    }
}
