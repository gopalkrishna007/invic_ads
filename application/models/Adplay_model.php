<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adplay_model extends CI_Model {

	const TABLE_NAME = "adplay";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}	
	public function getAllAdsData($status=null,$device_id=null){
		$this->db->select("ads.*,devices.device_id");
		$this->db->from(self::TABLE_NAME);
		$this->db->join("devices","devices.id=ads.devices_id","left");
		if(!empty($status)){
			$this->db->where("ads.status",$status);
		}
		if(!empty($device_id)){
			$this->db->where("ads.devices_id",$device_id);
		}
		$this->db->order_by("ads.id","DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function saveData($adsarray){
		$this->db->insert(self::TABLE_NAME,$adsarray);
		return $this->db->insert_id();
	} 
	public function getDataById($id){
		$this->db->where('id',$id);
		$query = $this->db->get(self::TABLE_NAME); 
		return $query->row_array();
	} 
	public function update($adsarray,$id){
		$this->db->where('id',$id);
		$this->db->update(self::TABLE_NAME,$adsarray);
		return $this->db->affected_rows();
	} 
	public function deleteAd($id){
		$this->db->where('id',$id);
		return $this->db->delete(self::TABLE_NAME);
	}
}
