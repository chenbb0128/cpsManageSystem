<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereUpdatedAt($value)
 * @property int $user_id 商家用户id
 * @property int $order_type 订单类别 1:淘宝订单 2:京东订单 3:拼多多订单
 * @property int $order_id 订单id
 * @property int $extract_amount 提现金额
 * @property int $commission_rate 佣金比例(%)
 * @property int $extract_status 提现状态 1 未提现 2已提现 3已失效
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereExtractAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereExtractStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentOrderMap whereUserId($value)
 * @mixin \Eloquent
 */
class AgentOrderMap extends Model
{
}
