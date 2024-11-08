<?php

/**
 * 全量维权订单查询入参
 * @author auto create
 */
class PublisherRefundOrderQueryOption
{
	
	/** 
	 * 结束时间
	 **/
	public $end_time;
	
	/** 
	 * 跳转类型，当向前或者向后翻页必须提供,-1: 向前翻页,1：向后翻页
	 **/
	public $jump_type;
	
	/** 
	 * 1 表示2方，2表示3方，4表示不限
	 **/
	public $member_type;
	
	/** 
	 * 1全部订单
	 **/
	public $order_scene;
	
	/** 
	 * 查询页数
	 **/
	public $page_no;
	
	/** 
	 * 单页订单量，1-100，上限100条
	 **/
	public $page_size;
	
	/** 
	 * 位点，除第一页之外，都需要传递；前端原样返回。
	 **/
	public $position_index;
	
	/** 
	 * 1-维权发起时间，2-订单结算时间（正向订单），3-维权完成时间，4-订单创建时间，5-订单更新时间 （注意：入参startTime小于2022年12月20日0点时，query_type只能为1、2、3；入参startTime大于等于2022年12月20日0点时，query_type可以为1、2、3、4、5)
	 **/
	public $query_type;
	
	/** 
	 * 开始时间
	 **/
	public $start_time;	
}
?>