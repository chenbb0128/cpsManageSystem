<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereUpdatedAt($value)
 * @property string $unique_id 标记唯一订单行：订单+sku维度的唯一标识
 * @property string $order_no 买家在京东后台显示的订单编号
 * @property string $sup_order_no 父订单号(多个商品同时下单才存在)
 * @property string $goods_id 商品id
 * @property int $order_status 订单状态
 * @property string $goods_name 商品名称
 * @property string $goods_image 商品图片
 * @property string $shop_name 店铺名称
 * @property string $shop_id 店铺id
 * @property int $goods_count 商品数量
 * @property int $goods_frozen_count 商品售后中数量
 * @property string|null $order_created_at 订单创建时间
 * @property string|null $order_finish_at 订单完成时间
 * @property string|null $order_update_at 订单更新时间
 * @property int $payment_money 付款时间
 * @property int $commission_rate 佣金比例
 * @property int $subside_rate 分成比例
 * @property int $subsidy_rate 补贴比例
 * @property int $final_rate 最终分佣比例（单位：%）=分成比例+补贴比例
 * @property int $estimate_cos_price 预估计佣金额(分)
 * @property int $estimate_fee 预估佣金(分)
 * @property int $actual_cos_price 实际计佣金额(分)
 * @property int $actual_fee 实际佣金(分)
 * @property string|null $jd_settle_at 京东结算时间
 * @property string $position_id 推广位id
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereActualCosPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereActualFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereEstimateCosPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereEstimateFee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereFinalRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereGoodsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereGoodsFrozenCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereGoodsImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereJdSettleAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereOrderCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereOrderFinishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereOrderUpdateAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder wherePaymentMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereShopId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereShopName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereSubsideRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereSubsidyRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereSupOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JdOrder whereUniqueId($value)
 * @mixin \Eloquent
 */
class JdOrder extends Model
{
}
