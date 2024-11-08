<?php

namespace App\Repositories;

use App\Repositories\Models\UserWallet;

/**
 * @property UserWallet $model
 */
class UserWalletRepository extends BaseRepository
{
    public function __construct() {
        $this->model = new UserWallet();
    }

    /**
     * 根据用户id获取钱包信息
     * @param $userId
     * @return mixed
     */
    public function getByUserId($userId)
    {
        return $this->model->where('user_id', $userId)
            ->select([
                'id',
                'extract_buy_amount',
                'extracting_buy_amount',
                'extracted_buy_amount',
                'extract_invite_amount',
                'extracting_invite_amount',
                'extracted_invite_amount',
                'extract_agent_amount',
                'extracting_agent_amount',
                'extracted_agent_amount',
            ])
            ->first();
    }
}
