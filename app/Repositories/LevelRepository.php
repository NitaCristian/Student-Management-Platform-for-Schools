<?php

namespace App\Repositories;

use App\Models\Level;
use App\Repositories\BaseRepository;

/**
 * Class LevelRepository
 * @package App\Repositories
 * @version August 18, 2020, 6:06 pm UTC
*/

class LevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'level',
        'course_id',
        'description'
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
        return Level::class;
    }
}
