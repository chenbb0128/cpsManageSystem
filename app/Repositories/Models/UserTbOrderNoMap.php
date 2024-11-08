<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap whereUpdatedAt($value)
 * @property int $user_id 用户id
 * @property string $order_no 淘宝订单号
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserTbOrderNoMap whereUserId($value)
 * @mixin \Eloquent
 */
class UserTbOrderNoMap extends Model
{
}
