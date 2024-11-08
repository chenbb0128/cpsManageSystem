<?php

namespace App\Repositories;

use App\Repositories\Models\JdOrder;

/**
 * @property JdOrder $model
 */
class JdOrderRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new JdOrder();
    }
}
