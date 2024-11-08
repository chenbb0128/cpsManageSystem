<?php

/**
 * 补贴金额明细节点。解释：各补贴类型的类型名称、补贴比率、补贴金额、单笔补贴上限、补贴分成比率的详细说明
 * @author auto create
 */
class SubsidyDetailDTO
{
	
	/** 
	 * 对应补贴类型的补贴金额
	 **/
	public $subsidy_fee;
	
	/** 
	 * 补贴比率
	 **/
	public $subsidy_rate;
	
	/** 
	 * 补贴分成比率
	 **/
	public $subsidy_share_rate;
	
	/** 
	 * 该笔订单包含的补贴类型
	 **/
	public $subsidy_type;
	
	/** 
	 * 单笔订单补贴上限。对应补贴类型的单笔订单补贴上限
	 **/
	public $subsidy_upper_limit;	
}
?>