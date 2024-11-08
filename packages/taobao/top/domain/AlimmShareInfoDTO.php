<?php

/**
 * 平台技术服务费明细节点。解释：各项平台技术服务费类型的类型名称、扣费比率、扣费金额的详细说明
 * @author auto create
 */
class AlimmShareInfoDTO
{
	
	/** 
	 * 结算渠道专项服务费
	 **/
	public $alimm_agent_service_fee;
	
	/** 
	 * 预估渠道专项服务费
	 **/
	public $alimm_agent_service_pre_fee;
	
	/** 
	 * 渠道专项服务费比率
	 **/
	public $alimm_agent_service_rate;
	
	/** 
	 * 结算技术服务费
	 **/
	public $alimm_tech_service_fee;
	
	/** 
	 * 预估技术服务费
	 **/
	public $alimm_tech_service_pre_fee;
	
	/** 
	 * 技术服务费比率
	 **/
	public $alimm_tech_service_rate;	
}
?>