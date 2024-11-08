<?php

/**
 * 平台专项服务费明细节点。解释：各项平台专项服务费类型的类型名称、扣费比率、扣费金额的详细说明
 * @author auto create
 */
class PlatformSpecialShareInfoDTO
{
	
	/** 
	 * 结算内容专项服务费
	 **/
	public $content_tech_service_fee;
	
	/** 
	 * 预估内容专项服务费
	 **/
	public $content_tech_service_pre_fee;
	
	/** 
	 * 内容专项服务费比率
	 **/
	public $content_tech_service_rate;
	
	/** 
	 * 结算流量专项服务费（默认无，限定开放）
	 **/
	public $traffic_tech_service_fee;
	
	/** 
	 * 预估流量专项服务费（默认无，限定开放）
	 **/
	public $traffic_tech_service_pre_fee;
	
	/** 
	 * 流量专项服务费比率（默认无，限定开放）
	 **/
	public $traffic_tech_service_rate;	
}
?>