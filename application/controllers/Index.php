<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//��ֹ�û�ֱ��ͨ��·�������ʿ���������������Ļ�����ʾ�Ҳ�������װ��

class Index extends CI_Controller {
	/**
	 * ���캯��
	 * Enter description here ...
	 */
	 public function __construct()
	{
		parent::__construct();
		$this->load->model('IndexModel');
		$this->load->library('Page');
	}
	/**
	 * Ĭ�Ϻ���
	 * Enter description here ...
	 */
	public function index()
	{
		//����������Ŀ������Ϣ
		$strWhere_nav='grade =1 and id != 1';
		$strDJXW_sql='select b.* from dx_section a inner join dx_section b on a.id = b.pid and b.pid = 15 and b.grade = 3  order by b.showtime DESC limit 0,8';
		$total_DJXW_lists=$this->IndexModel->getList_join($strDJXW_sql);//��ѯ�����������µ�8����Ϣ���б�
		$total_nav=$this->IndexModel->getList($strWhere_nav);
		$index_url =$this->config->item('base_url');//��ȡ��Ŀ¼������ҳ��ַ
		$this->load->view('Index/index',array('dx_nav'=>$total_nav,'dx_DJXW_lists'=>$total_DJXW_lists,'index_url'=>$index_url));
	}
	
}