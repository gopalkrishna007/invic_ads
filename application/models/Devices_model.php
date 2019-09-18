<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Devices_model extends CI_Model {

	const TABLE_NAME = "devices";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}	
	public function getAllData($status=null){
		if(!empty($status)){
			$this->db->where("status",$status);
		}
		$this->db->order_by("id", "DESC");
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
	public function saveData($deviceArray){
		$this->db->insert(self::TABLE_NAME,$deviceArray);
		return $this->db->insert_id();
	}  
	public function getCountByDevice($device_id){
		$this->db->where('device_id',$device_id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->num_rows();
	}
	public function updateDevicedata($deviceArray,$device_id){
		$this->db->where('id',$device_id);
		$this->db->update(self::TABLE_NAME,$deviceArray);
		return $this->db->affected_rows();
	}
	public function getDataById($device_id){
		$this->db->where('id',$device_id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}
	public function deleteDevice($device_id){
		$this->db->where('id',$device_id);
		return $this->db->delete(self::TABLE_NAME);
	}
	public function getDataByDevice($device_id){
		$this->db->where('device_id',$device_id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}
	public function updateDevicedataByDeviceID($deviceArray,$device_id){
		$this->db->where('device_id',$device_id);
		$this->db->update(self::TABLE_NAME,$deviceArray);
		return $this->db->affected_rows();
	}
	public function getAllDeviceData($status=null,$franchise_id=null){
		if(!empty($status)){
			$this->db->where("status",$status);
		}
		if(!empty($franchise_id)){
			$this->db->where("franchise_id",$franchise_id);
		}
		$this->db->where("device_name != ''");
		$this->db->order_by("id", "DESC");
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
}
