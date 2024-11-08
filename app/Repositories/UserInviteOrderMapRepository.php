<?php

namespace App\Repositories;

use App\Repositories\Models\UserInviteOrderMap;

/**
 * @property UserInviteOrderMap $model
 */
class UserInviteOrderMapRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new UserInviteOrderMap();
    }
}
