<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Franchise_selected_services_model extends CI_Model {

	const TABLE_NAME = "franchise_selected_services";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function saveSelectedservices($finalAdsArray,$franchise_id=null){
		if(!empty($franchise_id)){
			$this->db->where('franchise_id',$franchise_id);
			$this->db->delete(self::TABLE_NAME);
		}
		return $this->db->insert_batch(self::TABLE_NAME,$finalAdsArray);
	}
	public function getServicesByFranchiseId($franchise_id=null){
		if(!empty($franchise_id)){
			$this->db->where('franchise_id',$franchise_id);
		}
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
	
}
