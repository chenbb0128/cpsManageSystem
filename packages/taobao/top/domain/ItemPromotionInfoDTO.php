<?php

/**
 * 营销信息
 * @author auto create
 */
class ItemPromotionInfoDTO
{
	
	/** 
	 * 商品收入比率(%)：商品佣金比率+补贴比率。同物料类接口income_rate
	 **/
	public $commission_rate;
	
	/** 
	 * 佣金类型。MKT表示营销计划，SP表示定向计划，COMMON表示通用计划，ZX表示自选计划
	 **/
	public $commission_type;
	
	/** 
	 * 商品到手价。单位分
	 **/
	public $promotion_price;	
}
?>