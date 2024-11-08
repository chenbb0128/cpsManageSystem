<?php

/**
 * 券信息
 * @author auto create
 */
class CouponInfoDTO
{
	
	/** 
	 * 券ID
	 **/
	public $activity_id;
	
	/** 
	 * 券面额
	 **/
	public $coupon_amount;
	
	/** 
	 * 优惠券信息，满XX元减XX元
	 **/
	public $coupon_desc;
	
	/** 
	 * 优惠券结束时间
	 **/
	public $coupon_end_time;
	
	/** 
	 * 优惠券剩余数量
	 **/
	public $coupon_remain_count;
	
	/** 
	 * 优惠券开始时间
	 **/
	public $coupon_start_time;	
}
?>