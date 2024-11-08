<?php

namespace App\Repositories;

use App\Repositories\Models\UserWalletChangeLog;

/**
 * @property UserWalletChangeLog $model
 */
class UserWalletChangeLogRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new UserWalletChangeLog();
    }
}
