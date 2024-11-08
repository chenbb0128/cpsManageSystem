<?php

/**
 * 真正的业务数据结构
 * @author auto create
 */
class PublisherRefundOrderDTO
{
	
	/** 
	 * 订单结算时间
	 **/
	public $earning_time;
	
	/** 
	 * 商品标题
	 **/
	public $item_title;
	
	/** 
	 * 订单更新时间
	 **/
	public $modified_time;
	
	/** 
	 * 结算预估收入=结算金额*提成。以订单确认收货后的成交金额为基数，预估您可能获得的收入。
	 **/
	public $pub_share_fee;
	
	/** 
	 * 维权金额(买家申请维权退款的金额)
	 **/
	public $refund_fee;
	
	/** 
	 * 维权创建(淘客结算回执) 4, 维权成功(淘客结算回执) 2, 维权失败(淘客结算回执) 3, 发生多次维权，待处理 11, 从淘客处补扣（钱已结给淘客） 等待扣款 12, 从淘客处补扣（钱已结给淘客） 扣款成功 13, 从卖家处补扣（钱已结给卖家） 等待扣款 14, 从卖家处补扣（钱已结给卖家） 扣款成功 15
	 **/
	public $refund_status;
	
	/** 
	 * 维权编号，是当前订单发生维权退款的编号，非淘宝订单编号，如订单发生多次维权，则会产生多个维权编号
	 **/
	public $refund_suit_id;
	
	/** 
	 * 渠道关系id
	 **/
	public $relation_id;
	
	/** 
	 * 应退还预估收入：订单发生维权退款应退还的预估收入（佣金+补贴，含技术服务费和渠道专项服务费）
	 **/
	public $show_return_fee;
	
	/** 
	 * 会员关系id
	 **/
	public $special_id;
	
	/** 
	 * 订单创建时间
	 **/
	public $tb_trade_create_time;
	
	/** 
	 * 结算金额(订单确认收货后的成交金额）
	 **/
	public $tb_trade_finish_price;
	
	/** 
	 * 淘宝子订单编号
	 **/
	public $tb_trade_id;
	
	/** 
	 * 淘宝父订单编号(买家在淘宝后台显示的订单编号)
	 **/
	public $tb_trade_parent_id;
	
	/** 
	 * 应退还佣金对应的渠道专项服务费
	 **/
	public $tk_commission_agent_refund_fee;
	
	/** 
	 * 应退还佣金对应的技术服务费
	 **/
	public $tk_commission_alimm_refund_fee;
	
	/** 
	 * 应退还佣金(不含技术服务费和渠道专项服务费)
	 **/
	public $tk_commission_fee_refund;
	
	/** 
	 * 推广者角色(二方、三方)
	 **/
	public $tk_order_role;
	
	/** 
	 * 维权完成时间
	 **/
	public $tk_refund_suit_time;
	
	/** 
	 * 维权创建时间
	 **/
	public $tk_refund_time;
	
	/** 
	 * 应退还补贴对应的渠道专项服务费
	 **/
	public $tk_subsidy_agent_refund_fee;
	
	/** 
	 * 应退还补贴对应的技术服务费
	 **/
	public $tk_subsidy_alimm_refund_fee;
	
	/** 
	 * 应退还补贴(不含技术服务费和渠道专项服务费)
	 **/
	public $tk_subsidy_fee_refund;	
}
?>