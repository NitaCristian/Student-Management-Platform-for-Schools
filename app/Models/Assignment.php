<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assignment
 * @package App\Models
 * @version August 18, 2020, 6:18 pm UTC
 *
 * @property \App\Models\Batch $batch
 * @property \App\Models\Classroom $classroom
 * @property \App\Models\Course $course
 * @property \App\Models\Day $day
 * @property \App\Models\Level $level
 * @property \App\Models\Shift $shift
 * @property \App\Models\Time $time
 * @property integer $batch_id
 * @property integer $classroom_id
 * @property integer $course_id
 * @property integer $level_id
 * @property integer $shift_id
 * @property integer $day_id
 * @property integer $time_id
 */
class Assignment extends Model
{
    use SoftDeletes;

    public $table = 'assignments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'batch_id',
        'classroom_id',
        'course_id',
        'level_id',
        'shift_id',
        'day_id',
        'time_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'batch_id' => 'integer',
        'classroom_id' => 'integer',
        'course_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'batch_id' => 'required',
        'classroom_id' => 'required',
        'course_id' => 'required',
        'level_id' => 'required',
        'shift_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function batch()
    {
        return $this->belongsTo(\App\Models\Batch::class, 'batch_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function classroom()
    {
        return $this->belongsTo(\App\Models\Classroom::class, 'classroom_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function course()
    {
        return $this->belongsTo(\App\Models\Course::class, 'course_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function day()
    {
        return $this->belongsTo(\App\Models\Day::class, 'day_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function level()
    {
        return $this->belongsTo(\App\Models\Level::class, 'level_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function shift()
    {
        return $this->belongsTo(\App\Models\Shift::class, 'shift_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function time()
    {
        return $this->belongsTo(\App\Models\Time::class, 'time_id');
    }
}
