<?php

/**
 * 单品转链信息
 * @author auto create
 */
class ItemUrlList
{
	
	/** 
	 * 物料对应错误码
	 **/
	public $code;
	
	/** 
	 * 券信息
	 **/
	public $coupon_info_dto;
	
	/** 
	 * 转链成功的场景下，需要补充说明的信息
	 **/
	public $extra_info;
	
	/** 
	 * 入参的商品ID
	 **/
	public $input_item_id;
	
	/** 
	 * 链接信息
	 **/
	public $link_info_dto;
	
	/** 
	 * 物料对应错误描述
	 **/
	public $msg;
	
	/** 
	 * 营销信息
	 **/
	public $promotion_info_dto;	
}
?>