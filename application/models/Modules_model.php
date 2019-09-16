<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modules_model extends CI_Model{
	const TABLE_NAME = "modules";
    function __construct(){
        parent::__construct();
    }  
    public function getAllModules($status=null){
       if(!empty($status)){
            $this->db->where("status",$status);
        }
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result_array();

    }  
    public function saveIppoolData($ippoolarray,$branch_id = null){
        if(!empty($branch_id)){
            $this->db->where('branch_id',$branch_id);
            $this->db->delete(self::TABLE_NAME);
        }
        return $this->db->insert_batch(self::TABLE_NAME,$ippoolarray);       
    }
    
}

?>