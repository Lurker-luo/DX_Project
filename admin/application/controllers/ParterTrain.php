<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ParterTrain extends My_Controller {
	/**
	 * 构造函数
	 * Enter description here ...
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ParterTrainModel');
		$this->load->library('Page');
	}
	/**
	 * 默认函数
	 * Enter description here ...
	 */
	public function index()
	{
		$pageSize=12;
		$pageIndex=$this->input->get('page')?$this->input->get('page'):1;
		$selParam="a.section_name as asection_name,b.*";
		$dataSet="dx_section a INNER JOIN dx_section b ON a.id = b.pid";
		$strWhere="b.grade = 3 and b.is_del <> 1";
		$orderBy="b.level";
		$totalCount=$this->ParterTrainModel->getListCountByWhere($dataSet,$strWhere);
		$ParterTrain=$this->ParterTrainModel->getListByPage($pageSize,$pageIndex,$selParam,$dataSet,$strWhere,$orderBy);
		$page=new Page();
		$str_page=$page->create($pageIndex, $pageSize, $totalCount, array(), array());
		$data=array(
			'page'=>$str_page,
			'ParterTrain'=>$ParterTrain
		);
		$this->load->view('ParterTrain/list',$data);
	}
	/**
	 * 添加用户
	 * Enter description here ...
	 */
	public function add(){
		$cmd=$this->input->post('cmd');
		if ($cmd&&$cmd=='submit'){
			$dataArray=array(
				'pid'=>$this->input->post('pid'),
				'section_name'=>$this->input->post('section_name'),
				'author'=>$this->input->post('author'),
				'source'=>$this->input->post('source'),
				'content'=>$this->input->post('content'),
				'grade'=> 3
			);
			$result=$this->ParterTrainModel->add($dataArray);
			if ($result){
				show_error('index.php/ParterTrain/index',500,'提示信息：新闻信息添加成功！');
			}else{
				show_error('index.php/ParterTrain/add',500,'提示信息：新闻信息添加失败！');
			}
		}else{
			$parent=$this->ParterTrainModel->getList( " pid=1 and grade = 2 ");
			$this->load->view('ParterTrain/add',array('parent'=>$parent));
		}	
	}
	/**
	 * 编辑首页新闻
	 * Enter description here ...
	 */
	public function edit(){
		$cmd=$this->input->post('cmd');
		if ($cmd&&$cmd=='submit'){
			$id=$this->input->post('id');
			$dataArray=array(
				'pid'=>$this->input->post('pid'),
				'section_name'=>$this->input->post('section_name'),
				'author'=>$this->input->post('author'),
				'source'=>$this->input->post('source'),
				'content'=>$this->input->post('content')
			);//print_r($dataArray);exit;
			$result=$this->ParterTrainModel->edit($dataArray,'id='.$id);
			if ($result){
				show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻修改成功！');
			}else{
				show_error('index.php/ParterTrain/edit',500,'提示信息：首页新闻修改失败！');
			}
		}else{
			$id=$this->input->get('id');
			if ($id){
				$ParterTrain=$this->ParterTrainModel->getModel('id='.$id);
				if ($ParterTrain){
					$parent=$this->ParterTrainModel->getList(' pid=1 and  grade = 2 ');
					$this->load->view('ParterTrain/edit',array('ParterTrain'=>$ParterTrain,'parent'=>$parent));
				}else{
					show_error('index.php/ParterTrain/index',500,'提示信息：你要修改的圈子不存在或者已被删除！');
				}
			}else{
				show_error('index.php/ParterTrain/index',500,'提示信息：参数错误！');
			}
		}
	}
	/**
	 * 回收站函数
	 * Enter description here ...
	 */
	public function rubbish()
	{
		$pageSize=12;
		$pageIndex=$this->input->get('page')?$this->input->get('page'):1;
		$sel_param="a.section_name as asection_name,b.*";
		$data_set="dx_section a INNER JOIN dx_section b ON a.id = b.pid";
		$strWhere="b.grade = 3 and b.is_del = 1";
		$orderBy="b.level";
		$totalCount=$this->ParterTrainModel->getListCountByWhere($data_set,$strWhere);
		$ParterTrain=$this->ParterTrainModel->getListByPage($pageSize,$pageIndex,$sel_param,$data_set,$strWhere,$orderBy);
		$page=new Page();
		$str_page=$page->create($pageIndex, $pageSize, $totalCount, array(), array());
		$data=array(
			'page'=>$str_page,
			'ParterTrain'=>$ParterTrain
		);
		$this->load->view('ParterTrain/rubbish_list',$data);
	}
	/**
	 * 操作函数
	 * Enter description here ...
	 */
	public function operate(){
		$cmd=$this->input->get('cmd');
		$ids=$this->input->get('ids');
		switch ($cmd){
			case "pingbi":
				$flag=$this->ParterTrainModel->edit(array('status'=>0),'id IN ('.$ids.')');
				if ($flag){
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻屏蔽成功！');
				}else{
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻屏蔽失败！');
				}
				break;
			case "del":
				$flag=$this->ParterTrainModel->del('id IN ('.$ids.')');
				if ($flag){
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻彻底删除成功！');
				}else{
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻彻底删除失败！');
				}
				break;
			case "rubbish":
				$flag=$this->ParterTrainModel->edit(array('is_del'=>1),'id IN ('.$ids.')');
				if ($flag){
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻删除成功！');
				}else{
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻删除失败！');
				}
				break;
			case "ret":
				$flag=$this->ParterTrainModel->edit(array('is_del'=>0,'status'=>1),'id IN ('.$ids.')');
				if ($flag){
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻还原成功！');
				}else{
					show_error('index.php/ParterTrain/index',500,'提示信息：首页新闻还原失败！');
				}
				break;
		}
	}
}