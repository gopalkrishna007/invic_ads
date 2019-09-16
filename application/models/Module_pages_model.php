<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_pages_model extends CI_Model{
	const TABLE_NAME = "module_pages";
    function __construct(){
        parent::__construct();
    }   
    public function getDataByModuleID($module_id,$status=null){
        $this->db->where('modules_id',$module_id);
        if(!empty($status)){
            $this->db->where('status',$status);  
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