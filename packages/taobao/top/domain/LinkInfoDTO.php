<?php

/**
 * 链接信息
 * @author auto create
 */
class LinkInfoDTO
{
	
	/** 
	 * 会场CPS链接的长口令
	 **/
	public $cps_full_tpwd;
	
	/** 
	 * 会场CPS长链接
	 **/
	public $cps_long_url;
	
	/** 
	 * 会场CPS链接的短口令
	 **/
	public $cps_short_tpwd;
	
	/** 
	 * 会场CPS短链接
	 **/
	public $cps_short_url;
	
	/** 
	 * 1—单品 2—店铺 3—会场
	 **/
	public $material_type;
	
	/** 
	 * 会场ID
	 **/
	public $page_id;	
}
?>