<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ads_model extends CI_Model {

	const TABLE_NAME = "ads";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}	
	public function getAllAdsData($status=null,$device_id=null,$user_id=null,$franchise_id=null){
		$this->db->select("ads.*,devices.device_id,devices.device_name");
		$this->db->from(self::TABLE_NAME);
		$this->db->join("ad_selected_devices","ad_selected_devices.ad_id=ads.id");
		$this->db->join("devices","devices.id=ad_selected_devices.devices_id");		
		if(!empty($status)){
			$this->db->where("ads.status",$status);
		}
		if(!empty($franchise_id)){
			$this->db->where("ads.franchise_id",$franchise_id);
		}
		if(!empty($device_id)){
			$this->db->where("ad_selected_devices.devices_id",$device_id);
		}
		if(!empty($user_id)){
			$this->db->where("ads.user_id",$user_id);
		}
		$this->db->order_by("ads.id","DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function save($adsarray){
		$this->db->insert(self::TABLE_NAME,$adsarray);
		return $this->db->insert_id();
	} 
	public function getDataById($id){		
		$this->db->select("ads.*,users.fname,users.lname,users.email,users.mobile,users.username,users.password");
		$this->db->from(self::TABLE_NAME);
		$this->db->join("users","users.id=ads.user_id","left");
		$this->db->where('ads.id',$id);
		$query = $this->db->get(); 
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
	public function getAllAds($status=null,$user_id=null,$deviceType=null){
		$this->db->select('ads.*,devices.device_id,group_concat(DISTINCT concat(devices.device_name) SEPARATOR ",") as device_name,group_concat(DISTINCT concat(devices.device_location) SEPARATOR ",") as locations,users.username');
		$this->db->from(self::TABLE_NAME);
		$this->db->join("ad_selected_devices","ad_selected_devices.ad_id=ads.id");
		$this->db->join("devices","devices.id=ad_selected_devices.devices_id");		
		$this->db->join("users","users.id=ads.user_id","left");
		if(!empty($status)){
			$this->db->where("ads.status",$status);
		}
		if(!empty($user_id)){
			$this->db->where("ads.user_id",$user_id);
		}
		if(!empty($deviceType) && $deviceType == 1){
			$this->db->where("devices.numberofplayers <= ",$deviceType);
		}else if(!empty($deviceType) && $deviceType == 2){
			$this->db->where("devices.numberofplayers >= ",$deviceType);
		}
		
		$this->db->group_by("ads.id");
		$this->db->order_by("ads.id","DESC");
		$query = $this->db->get();
		return $query->result_array();
	}
	public function getaddanddevicedatabyid($id){
		$this->db->select('ads.*,devices.*,devices.id as deviceId');
		$this->db->from(self::TABLE_NAME);
		$this->db->join("ad_selected_devices","ad_selected_devices.ad_id=ads.id");
		$this->db->join("devices","devices.id=ad_selected_devices.devices_id");
		if(!empty($id)){
			$this->db->where("ads.id",$id);
		}
		$this->db->group_by("ads.id");
		$query = $this->db->get();
		return $query->row_array();
	}
}
