<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereUpdatedAt($value)
 * @property int $user_id 用户id
 * @property int $extract_buy_amount 可提取购物余额
 * @property int $extracting_buy_amount 提取中购物余额
 * @property int $extracted_buy_amount 已提取的购物余额
 * @property int $extract_invite_amount 可提取的邀请余额
 * @property int $extracting_invite_amount 提取中的邀请余额
 * @property int $extracted_invite_amount 已提取的邀请余额
 * @property int $extract_agent_amount 已提取代理商奖励余额
 * @property int $extracting_agent_amount 提取中的代理商奖励余额
 * @property int $extracted_agent_amount 可提取代理商奖励余额
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractAgentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractBuyAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractInviteAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractedAgentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractedBuyAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractedInviteAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractingAgentAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractingBuyAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereExtractingInviteAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWallet whereUserId($value)
 * @mixin \Eloquent
 */
class UserWallet extends Model
{
    protected $fillable = [
        'user_id',
        'extract_buy_amount',
        'extracting_buy_amount',
        'extracted_buy_amount',
        'extract_invite_money',
        'extracting_invite_money',
        'extracted_invite_money',
        'extract_agent_money',
        'extracting_agent_money',
        'extracted_agent_money',
    ];
}
