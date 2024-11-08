<?php

/**
 * 淘客推广信息
 * @author auto create
 */
class PublishInfo
{
	
	/** 
	 * 当天推广销量。 非实时，约1小时更新
	 **/
	public $daily_promotion_sales;
	
	/** 
	 * 商品信息-收入比率(商品佣金比率+补贴比率)。15.5表示15.5%
	 **/
	public $income_rate;
	
	/** 
	 * 单品淘礼金今日剩余可创建个数
	 **/
	public $tlj_remain_num;
	
	/** 
	 * 前N件佣金信息-前N件佣金生效或预热时透出以下字段
	 **/
	public $topn_info;
	
	/** 
	 * 两小时推广销量。 非实时，约半小时更新
	 **/
	public $two_hour_promotion_sales;	
}
?>