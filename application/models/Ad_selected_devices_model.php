<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ad_selected_devices_model extends CI_Model {

	const TABLE_NAME = "ad_selected_devices";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}	
	public function saveSelectedDevices($deviceArray,$ad_id = null){
		if(!empty($ad_id)){
			$this->db->where('ad_id',$ad_id);
			$this->db->delete(self::TABLE_NAME);
		}
		return $this->db->insert_batch(self::TABLE_NAME,$deviceArray);
	} 
	public function getDataByAdId($ad_id = null){
		if(!empty($ad_id)){
			$this->db->where('ad_id',$ad_id);
		}
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
	
}
