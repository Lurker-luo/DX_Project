<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * ��ҳģ��
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
	 * ��ȡ����
	 * Enter description here ...
	 * @param unknown_type $where
	 */
	function getModel($where){
		$query=$this->db->where($where)->get($this->tableName);
		return $query->row_array();
	}
	/**
	 * ����������ѯ����
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
	 * ���������Ӳ�ѯ������ѯ����
	 * Enter description here ...
	 * @param $strSQL
	 */
	function getList_join($strsql){
		$sql = $strsql;
		if ($sql == '')
		echo ('��ѯ������������ϵ����Ա��');
			
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	/**
	 * ��ҳ����
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
	 * ����������ȡ����
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