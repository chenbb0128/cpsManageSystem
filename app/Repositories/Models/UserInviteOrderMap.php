<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap query()
 * @property int $id
 * @property int $user_id 用户id
 * @property int $contribute_user_id 该订单的购买者
 * @property int $order_type 订单类别 1:淘宝订单 2:京东订单 3:拼多多订单
 * @property int $order_id 订单id
 * @property int $extract_amount 提现金额
 * @property int $commission_rate 佣金比例(%)
 * @property int $extract_status 提现状态 1 未提现 2已提现 3已失效
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereContributeUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereExtractAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereExtractStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteOrderMap whereUserId($value)
 * @mixin \Eloquent
 */
class UserInviteOrderMap extends Model
{
}
