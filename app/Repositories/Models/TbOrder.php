<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereUpdatedAt($value)
 * @property string $order_no 买家在淘宝后台显示的订单编号
 * @property string $sub_order_no 每个商品对应订单编号
 * @property string $goods_id 商品id
 * @property string $goods_sign 商品签名
 * @property string $goods_name 商品名称
 * @property string $goods_image 商品图片
 * @property int $goods_count 商品数量
 * @property string $order_type 订单类别
 * @property int $order_status 订单状态
 * @property int $settle_account_status 结算状态
 * @property string|null $order_created_at 订单创建时间
 * @property string|null $payment_at 付款时间
 * @property string|null $tb_payment_at 淘宝付款时间
 * @property int $payment_money 付款金额(分)
 * @property int $settle_account_money 结算金额(分)
 * @property int $total_commission_fee 结算佣金(分)
 * @property string|null $tb_settle_at 淘宝结算时间
 * @property int $service_money 服务费(分)
 * @property int $commission_rate 佣金比例(%)
 * @property int $pre_payment_income 预估收入(分)
 * @property int $pre_settle_account_income 结算预估收入
 * @property string $adzone_id 推广位id
 * @property int $rights_protection 维权状态(0否 1是)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereAdzoneId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereCommissionRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereGoodsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereGoodsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereGoodsImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereGoodsName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereGoodsSign($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereOrderCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder wherePaymentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder wherePaymentMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder wherePrePaymentIncome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder wherePreSettleAccountIncome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereRightsProtection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereServiceMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereSettleAccountMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereSettleAccountStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereSubOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereTbPaymentAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereTbSettleAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TbOrder whereTotalCommissionFee($value)
 * @mixin \Eloquent
 */
class TbOrder extends Model
{
}
