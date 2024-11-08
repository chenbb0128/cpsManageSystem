<?php

/**
 * 链接/口令转链
 * @author auto create
 */
class LkMaterialDTO
{
	
	/** 
	 * 优惠券id（邀约制权限，仅面向KA淘宝客）
	 **/
	public $coupon_id;
	
	/** 
	 * 是否指定券，1-指定 0-不指定 默认为0（邀约制权限，仅面向KA淘宝客）
	 **/
	public $is_target_coupon;
	
	/** 
	 * 物料链接，可以为url或淘口令
	 **/
	public $material_url;	
}
?>