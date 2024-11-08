<?php

namespace App\Repositories;

use App\Repositories\Models\UserInviteCode;

/**
 * @property UserInviteCode $model
 */
class UserInviteCodeRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new UserInviteCode();
    }
}
