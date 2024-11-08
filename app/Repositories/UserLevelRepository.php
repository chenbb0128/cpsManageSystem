<?php

namespace App\Repositories;

use App\Repositories\Models\UserLevel;

/**
 * @property UserLevel $model
 */
class UserLevelRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new UserLevel();
    }
}
