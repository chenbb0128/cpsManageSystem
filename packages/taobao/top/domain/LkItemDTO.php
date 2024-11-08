<?php

/**
 * 商品转链
 * @author auto create
 */
class LkItemDTO
{
	
	/** 
	 * 优惠券id（邀约制权限，仅面向KA淘宝客）
	 **/
	public $coupon_id;
	
	/** 
	 * 1表示商品转通用计划链接，其他值或不传表示转最优佣金率（含营销计划）链接
	 **/
	public $dx;
	
	/** 
	 * 淘宝客外部用户标记，如自身系统账户ID；微信ID等
	 **/
	public $external_id;
	
	/** 
	 * 是否指定券，1-指定 0-不指定 默认为0（邀约制权限，仅面向KA淘宝客）
	 **/
	public $is_target_coupon;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 入参商品id下的skuid，传入时会透传至转链结果url中
	 **/
	public $sku_id;	
}
?>