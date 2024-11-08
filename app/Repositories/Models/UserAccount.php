<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereUpdatedAt($value)
 * @property int $user_id 用户id
 * @property string $alipay_name 支付宝姓名
 * @property string $alipay_account 支付宝账号
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereAlipayAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereAlipayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAccount whereUserId($value)
 * @mixin \Eloquent
 */
class UserAccount extends Model
{
}
