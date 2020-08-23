<?php

namespace App\Repositories;

use App\Models\Assignment;
use App\Repositories\BaseRepository;

/**
 * Class AssignmentRepository
 * @package App\Repositories
 * @version August 18, 2020, 6:18 pm UTC
*/

class AssignmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch_id',
        'classroom_id',
        'course_id',
        'level_id',
        'shift_id',
        'day_id',
        'time_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Assignment::class;
    }
}
