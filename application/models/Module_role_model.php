<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module_role_model extends CI_Model{
    const TABLE_NAME = "module_role";
    function __construct(){
        parent::__construct();
    }  
      
    public function getAllData($status=null,$created_by=null){       
        $this->db->select("module_role.*,group_concat(concat(modules.module_name) SEPARATOR ',') as module_names");
        $this->db->from(self::TABLE_NAME);
        $this->db->join("role_selected_module","role_selected_module.module_role_id = module_role.id");
        $this->db->join("modules","modules.id = role_selected_module.modules_id");
        if(!empty($created_by)){
            $this->db->where("module_role.created_by",$created_by);
        }
        if(!empty($status)){
            $this->db->where("module_role.status",$status);
        }
        $this->db->group_by("module_role.id");
        $query = $this->db->get();
        return $query->result_array();

    }
    public function getmodulePages($module_role_id){
        $this->db->select("group_concat(concat(module_pages.page_name) SEPARATOR ',') as page_names");
        $this->db->from('role_selected_module_pages');
        $this->db->join("module_pages","module_pages.id = role_selected_module_pages.module_pages_id");
        $this->db->where("role_selected_module_pages.module_role_id",$module_role_id);
        $this->db->group_by("role_selected_module_pages.module_role_id");
        $query = $this->db->get();
        return $query->row_array();

    }
    public function saveRole($userDat){        
        $this->db->insert(self::TABLE_NAME,$userDat);  
        return $this->db->insert_id();    
    }
    public function getAllModuleRols($status = null,$created_by = null){
		if(!empty($status)){
            $this->db->where("status",$status);
        }
		if(!empty($created_by)){
            $this->db->where("created_by",$created_by);
        }
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result_array();
    }
    public function getDataById($module_role_id){
        $this->db->select("module_role.*,group_concat(DISTINCT role_selected_module.modules_id SEPARATOR ',') as module_ids,group_concat(DISTINCT role_selected_module_pages.module_pages_id SEPARATOR ',') as page_ids");
        $this->db->from(self::TABLE_NAME);
        $this->db->join("role_selected_module","role_selected_module.module_role_id = module_role.id");
        $this->db->join("role_selected_module_pages","role_selected_module_pages.module_role_id = module_role.id");
        $this->db->where("module_role.id",$module_role_id);
        $this->db->group_by("module_role.id");
        $query = $this->db->get();
        return $query->row_array();
    }
    public function updateRole($userDat,$module_id){
        $this->db->where("id",$module_id);
        $this->db->update(self::TABLE_NAME,$userDat);
        return $this->db->affected_rows();
    }
}

?>