<?php

namespace App\Repositories;

use App\Repositories\Models\TbOrder;

/**
 * @property TbOrder $model
 */
class TbOrderRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new TbOrder();
    }
}
