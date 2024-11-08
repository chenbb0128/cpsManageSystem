<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereUpdatedAt($value)
 * @property int $user_id 用户id
 * @property int $category 类型 1 购物余额 2 邀请余额 3 代理商余额
 * @property int $change_type 变化类别: 1 增加 2 减少
 * @property int $before_amount 变更前金额
 * @property int $after_money 变更后金额
 * @property string $extra_info 额外的信息，json保存
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereAfterMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereBeforeAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereChangeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereExtraInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWalletChangeLog whereUserId($value)
 * @mixin \Eloquent
 */
class UserWalletChangeLog extends Model
{
}
