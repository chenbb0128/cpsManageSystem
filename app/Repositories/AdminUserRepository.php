<?php

namespace App\Repositories;

use App\Repositories\Models\AdminUser;

/**
 * @property AdminUser $model
 */
class AdminUserRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new AdminUser();
    }
}
