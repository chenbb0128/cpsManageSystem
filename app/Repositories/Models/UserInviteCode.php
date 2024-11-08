<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereUpdatedAt($value)
 * @property int $user_id 用户id
 * @property string $code 邀请码
 * @property string $qrcode_url 微信公众号二维码链接
 * @property string $ticket 微信公众号邀请二维码ticket
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereQrcodeUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereTicket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserInviteCode whereUserId($value)
 * @mixin \Eloquent
 */
class UserInviteCode extends Model
{
}
