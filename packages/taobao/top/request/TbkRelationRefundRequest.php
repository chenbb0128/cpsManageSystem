<?php
/**
 * TOP API: taobao.tbk.relation.refund request
 * 
 * @author auto create
 * @since 1.0, 2024.09.04
 */
class TbkRelationRefundRequest
{
	/** 
	 * 参数option
	 **/
	private $searchOption;
	
	private $apiParas = array();
	
	public function setSearchOption($searchOption)
	{
		$this->searchOption = $searchOption;
		$this->apiParas["search_option"] = $searchOption;
	}

	public function getSearchOption()
	{
		return $this->searchOption;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.relation.refund";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
