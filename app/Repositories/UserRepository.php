<?php

namespace App\Repositories;

use App\Repositories\Models\User;

/**
 * @property User $model
 */
class UserRepository extends BaseRepository
{
    public function __construct() {
        $this->model = new User();
    }

    public function getByUnionid($unionid)
    {
        return $this->model()->where('unionid', $unionid)->first();
    }
}
