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
		$this->db->select("services.servicename,franchise_selected_services.*");
		$this->db->from(self::TABLE_NAME);
		$this->db->join("services","franchise_selected_services.service_id = services.id");
		if(!empty($franchise_id)){
			$this->db->where('franchise_selected_services.franchise_id',$franchise_id);
		}
		$query = $this->db->get();
		return $query->result_array();
	}
	
}
