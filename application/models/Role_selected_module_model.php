<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class role_selected_module_model extends CI_Model{
	const TABLE_NAME = "role_selected_module";
    function __construct(){
        parent::__construct();
    }      
    public function saveSelectedModuleData($modulerolearray,$module_role_id=null){
        if(!empty($module_role_id)){
			$this->db->where("module_role_id",$module_role_id);
			$this->db->delete(self::TABLE_NAME);
		}
        return $this->db->insert_batch(self::TABLE_NAME,$modulerolearray);       
    }
    
}

?>