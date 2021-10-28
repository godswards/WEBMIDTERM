<?php

namespace App\Repositories;

use App\Models\Rotcmember;
use App\Repositories\BaseRepository;

/**
 * Class RotcmemberRepository
 * @package App\Repositories
 * @version October 28, 2021, 8:40 am UTC
*/

class RotcmemberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fname',
        'lname',
        'birthday',
        'rank'
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
        return Rotcmember::class;
    }
}
