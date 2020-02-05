<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multipleplayerads_model extends CI_Model {

	const TABLE_NAME = "multipleplayerads";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}	
	public function saveData($adsarray){
		return $this->db->insert_batch(self::TABLE_NAME,$adsarray);
	}
	public function getDataByAdId($ad_id,$device_id){
		$this->db->where('ad_id',$ad_id);
		$this->db->where('device_id',$device_id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
}
