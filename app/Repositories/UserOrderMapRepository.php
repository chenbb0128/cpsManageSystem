<?php

namespace App\Repositories;

use App\Repositories\Models\UserOrderMap;

/**
 * @property UserOrderMap $model
 */
class UserOrderMapRepository extends BaseRepository
{
    public function __construct() {
        $this->model = new UserOrderMap();
    }
}
