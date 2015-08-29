<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 首页模型
 * Enter description here ...
 * @author BenBen
 *
 */
class IndexModel extends CI_Model {
	private $tableName='section';
	function __construct() {
		parent::__construct();
	}
	
	/**
	 * 获取对象
	 * Enter description here ...
	 * @param unknown_type $where
	 */
	function getModel($where){
		$query=$this->db->where($where)->get($this->tableName);
		return $query->row_array();
	}
	/**
	 * 根据条件查询集合
	 * Enter description here ...
	 * @param $strWhere
	 */
	function getList($strWhere){
		$sql = "SELECT * FROM dx_".$this->tableName;
		if ($strWhere != '')
		$sql .= " WHERE " . $strWhere;
			
		$query = $this->db->query($sql);
		return $query->result_array();
	}
		/**
	 * 根据自连接查询条件查询集合
	 * Enter description here ...
	 * @param $strSQL
	 */
	function getList_join($strsql){
		$sql = $strsql;
		if ($sql == '')
		echo ('查询条件出错，请联系管理员！');
			
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	/**
	 * 分页函数
	 * Enter description here ...
	 * @param $pageSize
	 * @param $pageIndex
	 * @param $where
	 * @param $orderBy
	 */
	function getListByPage($pageSize,$pageIndex,$strWhere,$orderBy){
		$sql = "SELECT * FROM dx_".$this->tableName;
		if ($strWhere != '')
		$sql .= " WHERE " . $strWhere;
		if ($orderBy != '')
		$sql .= " ORDER BY " . $orderBy;

		$sql .= " LIMIT " . ($pageSize * $pageIndex - $pageSize) . "," . $pageSize;  //print_r($sql);exit;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	/**
	 * 根据条件获取数量
	 * Enter description here ...
	 * @param $strWhere
	 */
	function getListCountByWhere($strWhere){
		$sql = "SELECT * FROM dx_".$this->tableName;
		if ($strWhere != '')
		$sql .= " WHERE " . $strWhere;
			
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
	
}