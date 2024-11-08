<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereUpdatedAt($value)
 * @property string $order_no 订单号
 * @property string $goods_id 商品id
 * @property int $order_status 订单状态
 * @property string $goods_name 商品名称
 * @property string $goods_sign 商品签名,搜索商品要用
 * @property int $goods_count 商品数量
 * @property int $goods_price 商品价格
 * @property string $goods_image 商品图片
 * @property int $payment_money 付款金额(分)
 * @property int $commission_rate 佣金比率
 * @property int $commission_money 佣金金额
 * @property string|null $order_created_at 订单创建时间
 * @property string|null $order_group_success_at 成团时间
 * @property string|null $payment_at 支付时间
 * @property string|null $order_update_at 订单更新时间
 * @property string|null $order_receive_time 订单确认收货时间
 * @property string|null $order_settle_time 订单结算时间
 * @property int $price_compare_status 比价状态: 0 正常 1 比价
 * @property int $order_type 下单场景类型
 * @property string $pid pid
 * @property string $group_id 成团id
 * @property string $custom_parameters 自定义的参数
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereCommissionMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereCustomParameters($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGoodsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGoodsImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGoodsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGoodsSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderGroupSuccessAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderReceiveTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderSettleTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder whereOrderUpdateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder wherePaymentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder wherePaymentMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder wherePid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PddOrder wherePriceCompareStatus($value)
 * @mixin \Eloquent
 */
class PddOrder extends Model
{
}
