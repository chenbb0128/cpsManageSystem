<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel whereUpdatedAt($value)
 * @property int $level 等级
 * @property int $commission_rate 佣金比率(%)
 * @property string $remake 备注
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLevel whereRemake($value)
 * @mixin \Eloquent
 */
class UserLevel extends Model
{
}
