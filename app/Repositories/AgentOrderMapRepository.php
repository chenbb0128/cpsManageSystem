<?php

namespace App\Repositories;

use App\Repositories\Models\AgentOrderMap;

/**
 * @property AgentOrderMap $model
 */
class AgentOrderMapRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new AgentOrderMap();
    }
}
