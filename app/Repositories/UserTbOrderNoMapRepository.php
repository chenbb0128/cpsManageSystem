<?php

namespace App\Repositories;

use App\Repositories\Models\UserTbOrderNoMap;

/**
 * @property UserTbOrderNoMap $model
 */
class UserTbOrderNoMapRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new UserTbOrderNoMap();
    }
}
