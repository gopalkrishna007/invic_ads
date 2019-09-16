<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model {

	const TABLE_NAME = "admin";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	
	public function isAdminExists($userDetails)
	{
		$this->db->select("id,name,user_type");
		$this->db->where('username',$userDetails['username']);
		$this->db->where('password',$userDetails['password']);
		$query = $this->db->get(self::TABLE_NAME);
		$userDetails=  $query->row_array();
		return $userDetails;
	}
	public function checkuserpassword($userid,$password)
	{
		//$this->db->select("id,username,user_type");
		$this->db->where('id', $userid);
		$this->db->where('password', $password);

        //$this->db->where('password', $password);
        $query = $this->db->get(self::TABLE_NAME);			
        return $query->row_array();	
	}
	public function update($userDetails, $user_id)
	{
		
		$this->db->where('id', $user_id);
		return $this->db->update(self::TABLE_NAME, $userDetails);			 
	}
	

}
