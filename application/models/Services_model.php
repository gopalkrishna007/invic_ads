<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class services_model extends CI_Model {

	const TABLE_NAME = "services";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function checkservice($mobile){
		$this->db->where('mobile',$mobile);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}
	public function countservices($username,$id=null){
		$this->db->where('username',$username);
		if(!empty($id)){
			$this->db->where('id != ',$id);
		}
		$query = $this->db->get(self::TABLE_NAME);
		return $query->num_rows();
	}
	public function saveService($serviceArrar){
		$this->db->insert(self::TABLE_NAME,$serviceArrar);
		return $this->db->insert_id();
	}
    public function updateService($serviceArrar,$id){
		$this->db->where('id',$id);
		return $this->db->update(self::TABLE_NAME,$serviceArrar);
	}
	public function getServiceDataById($id){
		$this->db->where('id',$id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}
	public function user_verification_when_edit($mobile,$user_id)
	{
		$query =  $this->db->where('mobile',$mobile)->where('id !=',$user_id)->get(self::TABLE_NAME);
		return $query->num_rows();
	}
	
	public function checkuserByCondition($condition_array)
	{
		$query =  $this->db->get_where(self::TABLE_NAME,$condition_array);
		return $query->row_array();
	}
	public function getAllServices($status=null,$franchise_id=null){
		if(!empty($franchise_id)){
			$this->db->where('franchise_id',$franchise_id);
		}
		if(!empty($status)){
			$this->db->where('status',$status);
		}
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
	public function deleteuser($user_id){
		$this->db->where('id',$user_id);
		return $this->db->delete(self::TABLE_NAME);
	}
	
}
