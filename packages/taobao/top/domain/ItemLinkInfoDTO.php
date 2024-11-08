<?php

/**
 * 链接信息
 * @author auto create
 */
class ItemLinkInfoDTO
{
	
	/** 
	 * 二合一链接的长口令
	 **/
	public $coupon_full_tpwd;
	
	/** 
	 * 二合一长链接
	 **/
	public $coupon_long_url;
	
	/** 
	 * 二合一链接的短口令
	 **/
	public $coupon_short_tpwd;
	
	/** 
	 * 二合一链接长链
	 **/
	public $coupon_short_url;
	
	/** 
	 * CPS链接的长口令
	 **/
	public $cps_full_tpwd;
	
	/** 
	 * CPS链接长链
	 **/
	public $cps_long_url;
	
	/** 
	 * CPS链接的短口令
	 **/
	public $cps_short_tpwd;
	
	/** 
	 * CPS链接短链
	 **/
	public $cps_short_url;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 1—单品 2—店铺 3—会场
	 **/
	public $material_type;
	
	/** 
	 * 种草页链接，定向开放
	 **/
	public $share_unit_url;	
}
?>