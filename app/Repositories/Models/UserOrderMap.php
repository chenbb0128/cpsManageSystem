<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereUpdatedAt($value)
 * @property int $user_id 用户id
 * @property int $order_id 订单id
 * @property int $order_type 订单类别 1:淘宝订单 2:京东订单 3:拼多多订单
 * @property int $extract_amount 提现金额
 * @property int $commission_rate 佣金比例(%)
 * @property int $extract_status 提现状态 1 未提现 2已提现 3已失效
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereExtractAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereExtractStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserOrderMap whereUserId($value)
 * @mixin \Eloquent
 */
class UserOrderMap extends Model
{

}
