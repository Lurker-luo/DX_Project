<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//放止用户直接通过路径来访问控制器，如果这样的话会显示找不到（封装）

class Index extends CI_Controller {
	/**
	 * 构造函数
	 * Enter description here ...
	 */
	 public function __construct()
	{
		parent::__construct();
		$this->load->model('IndexModel');
		$this->load->library('Page');
	}
	/**
	 * 默认函数
	 * Enter description here ...
	 */
	public function index()
	{
		//查找所有栏目名称信息
		$strWhere_nav='grade =1 and id != 1';
		$strDJXW_sql='select b.* from dx_section a inner join dx_section b on a.id = b.pid and b.pid = 15 and b.grade = 3  order by b.showtime DESC limit 0,8';
		$total_DJXW_lists=$this->IndexModel->getList_join($strDJXW_sql);//查询党建新闻最新的8条信息的列表
		$total_nav=$this->IndexModel->getList($strWhere_nav);
		$index_url =$this->config->item('base_url');//获取根目录，即首页地址
		$this->load->view('Index/index',array('dx_nav'=>$total_nav,'dx_DJXW_lists'=>$total_DJXW_lists,'index_url'=>$index_url));
	}
	
}