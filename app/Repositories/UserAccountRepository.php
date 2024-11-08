<?php

namespace App\Repositories;

use App\Repositories\Models\UserAccount;

/**
 * @property UserAccount $model
 */
class UserAccountRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new UserAccount();
    }
}
