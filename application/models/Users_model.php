<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	const TABLE_NAME = "users";
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function isAdminExists($userDetails)
	{
		$this->db->where('username',$userDetails['username']);
		$this->db->where('password',$userDetails['password']);
		$query = $this->db->get(self::TABLE_NAME);
		$userDetails=  $query->row_array();
		return $userDetails;
	}
	public function checkuser($mobile){
		$this->db->where('mobile',$mobile);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}
	public function countusers($username,$id=null){
		$this->db->where('username',$username);
		if(!empty($id)){
			$this->db->where('id != ',$id);
		}
		$query = $this->db->get(self::TABLE_NAME);
		return $query->num_rows();
	}
	public function saveUser($userarray){
		$this->db->insert(self::TABLE_NAME,$userarray);
		return $this->db->insert_id();
	}
    public function updateUser($userData,$mobile){
		$this->db->where('mobile',$mobile);
		return $this->db->update(self::TABLE_NAME,$userData);
	}
	public function getUserDataById($user_id){
		$this->db->where('id',$user_id);
		$query = $this->db->get(self::TABLE_NAME);
		return $query->row_array();
	}
	public function user_verification_when_edit($mobile,$user_id)
	{
		$query =  $this->db->where('mobile',$mobile)->where('id !=',$user_id)->get(self::TABLE_NAME);
		return $query->num_rows();
	}
	public function updateUserdata($userData,$user_id){
		$this->db->where('id',$user_id);
		return $this->db->update(self::TABLE_NAME,$userData);
	}
	public function update($userData,$user_id){
		$this->db->where('id',$user_id);
		return $this->db->update(self::TABLE_NAME,$userData);
	}
	public function checkuserByCondition($condition_array)
	{
		$query =  $this->db->get_where(self::TABLE_NAME,$condition_array);
		return $query->row_array();
	}
	public function getAllUsers($user_type=null){
		if(!empty($user_type)){
			$this->db->where('user_type',$user_type);
		}
		$query = $this->db->get(self::TABLE_NAME);
		return $query->result_array();
	}
	public function deleteuser($user_id){
		$this->db->where('id',$user_id);
		return $this->db->delete(self::TABLE_NAME);
	}
	public function getuserdata($register_type){
		$query = $this->db->query('SELECT count(id) as userscount,(select count(id) from users where `register_type`='.$register_type.' and DATE_FORMAT(created_date, "%m") = DATE_FORMAT(curdate(), "%m")) as userscount_month,(select count(id) from users where `register_type`='.$register_type.' and DATE_FORMAT(created_date, "%Y-%m-%d") = DATE_FORMAT(curdate(), "%Y-%m-%d")) as userscount_today FROM `users` WHERE `register_type`='.$register_type);
		return $query->row_array();
	}
	public function getpremiumuserdata($type){
		$query = $this->db->query('SELECT count(id) as userscount,(select count(id) from users where `type`='.$type.' and DATE_FORMAT(created_date, "%m") = DATE_FORMAT(curdate(), "%m")) as userscount_month,(select count(id) from users where `type`='.$type.' and DATE_FORMAT(created_date, "%Y-%m-%d") = DATE_FORMAT(curdate(), "%Y-%m-%d")) as userscount_today FROM `users` WHERE `type`='.$type);
		return $query->row_array();
	}
	public function getmonthwiseuserdata($register_type=1,$month){
		$query = $this->db->query("SELECT count(id) as userscount FROM `users` WHERE `register_type`='$register_type' and DATE_FORMAT(created_date, '%Y-%m') = '$month'");
		return $query->row_array();
	}
	public function getmonthwisepremiumuserdata($type=2,$month){
		$query = $this->db->query("SELECT count(id) as userscount FROM `users` WHERE `type`='$type' and DATE_FORMAT(created_date, '%Y-%m') = '$month'");
		return $query->row_array();
	}
}
