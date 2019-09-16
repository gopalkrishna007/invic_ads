<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Properties_model extends CI_Model {

	const TABLE_NAME = "properties";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function saveProperties($userarray){
		return $this->db->insert(self::TABLE_NAME,$userarray);
	}
	public function getAllProperties($status=null){
		if(!empty($status)){
			$this->db->where('status',$status);
		}
		$this->db->order_by("id","DESC");
		$query = $this->db->get(self::TABLE_NAME);		
		return $query->row_array();
	}
	public function deleteProperties($id){
		$this->db->where('id',$id);
		return $this->db->delete(self::TABLE_NAME);
	}
	public function updatePropertiesdata($userarray,$id){
		$this->db->where('id',$id);
		return $this->db->update(self::TABLE_NAME,$userarray);
	}	  
	public function getPropertiesDataById($id){
		$this->db->where('id',$id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}	
	
	
	
}
