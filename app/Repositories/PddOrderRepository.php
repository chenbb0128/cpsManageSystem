<?php

namespace App\Repositories;

use App\Repositories\Models\PddOrder;

/**
 * @property PddOrder $model
 */
class PddOrderRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new PddOrder();
    }
}
