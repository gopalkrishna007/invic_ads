<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');	
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$request_method = $this->router->fetch_method();
			$allowed = array(
							'index','logincheck'
						);
			if( $this->session->userdata('id') != null && $this->session->userdata('user_type') == 1)
			{    
					
			}else{
				
				  if(!in_array($request_method, $allowed)) 
					redirect(base_url()); 
			}
	   $this->load->library('Uploaddata');
	   $this->load->library('Sms');
	   $this->load->model('users_model');
	   $this->load->model('admin_model'); 
	   $this->load->model('ads_model');
	   $this->load->model('properties_model');
	   $this->load->model('devices_model');
	}
	public function prepare_flashmessage($msg, $type) {
        $returnmsg = '';
        switch ($type) {
            case 0: $returnmsg = " <div class='col-md-12'>
                <div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' style='top: -2.5px;'>&times;</a>
                <strong>Success!</strong> " . $msg . "</div></div>";
                break;
            case 1: $returnmsg = " <div class='col-md-12'>
                <div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' style='top: -2.5px;'>&times;</a>
                <strong>Error!</strong> " . $msg . "</div></div>";
                break;
            case 2: $returnmsg = " <div class='col-md-12'>
                <div class='alert alert-info'>
                <a href='#' class='close' data-dismiss='alert style='top: -2.5px;''>&times;</a>
                <strong>Info!</strong> " . $msg . "</div></div>";
                break;
            case 3: $returnmsg = " <div class='col-md-12'>
                <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' style='top: -2.5px;'>&times;</a>
                <strong>Warning!</strong> " . $msg . "</div></div>";
                break;
        }
        $this->session->set_flashdata("message", $returnmsg);
    }
	public function index()
	{
			$this->load->view('user_dashboard/index');  
	}
	public function logincheck(){
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run())
		{
			$userName = $this->input->post('username');
			$password = $this->input->post('password');
			$userDetails = array(
							'username' => $userName,
							'password' => md5($password),
							);
			$userDetails = $this->users_model->isAdminExists($userDetails);
			if(!empty($userDetails))
			{
				if($userDetails['user_type'] == 2){
					$this->session->set_userdata($userDetails);
					redirect("user_dashboard/addads");
				}else{
					$this->prepare_flashmessage("This username and password not exists..", 1);
					$this->load->view('user_dashboard/index');
				}
			}else{
				$this->prepare_flashmessage("Enter currect username and password..", 1);
				$this->load->view('user_dashboard/index');
			}

		}else
		{			
		  $this->load->view('user_dashboard/index');
		}
		
	}	
	public function addads(){
	    $views = array('addads');
	    $deviceData = $this->devices_model->getAllData($status='active');
		$data = array('views'=>$views,'deviceData'=>$deviceData);
		$this->load->view('user_dashboard/template/template',$data);
	}
	public function saveads(){
		$this->form_validation->set_rules('adTitle','title','trim|required');
		$this->form_validation->set_rules('adType','adType','trim|required');
		$this->form_validation->set_rules('adDuration','adDuration','trim|required');
		$this->form_validation->set_rules('add_locations','add_locations','trim|required');
		$this->form_validation->set_rules('devices_id','devices_id','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$adTitle = $this->input->post("adTitle");
			$adType = $this->input->post("adType");
			$adDuration = $this->input->post("adDuration");
			$add_locations = $this->input->post("add_locations");
			$devices_id = $this->input->post("devices_id");
			$adCategory = $this->input->post("adCategory");
			$user_id = $this->session->userdata('id');
			/*if(!empty($this->input->post("isLiveEnabled"))){
				$isLiveEnabled = $this->input->post("isLiveEnabled");
			}else{
				$isLiveEnabled = 'false';
			}*/
			if(!empty($this->input->post("adCategory"))){
				$isLiveEnabled = 'false';
			}else{
				$isLiveEnabled = 'true';
			}
			if(!empty($this->input->post("imageDisplayDurationsplit"))){
				$imageDisplayDurationsplit = $this->input->post("imageDisplayDurationsplit");
			}else{
				$imageDisplayDurationsplit = 'false';
			}
			$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('start_date'));
			$start_date = $myDateTime->format('Y-m-d H:i:s');
			$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('end_date'));
			$end_date = $myDateTime->format('Y-m-d H:i:s');
			$imageDisplayDuration = $this->input->post("imageDisplayDuration");
			$trainerarray = array('adTitle'=>$adTitle,'adType'=>$adType,'adDuration'=>$adDuration,'add_locations'=>$add_locations,'isLiveEnabled'=>$isLiveEnabled,'imageDisplayDurationsplit'=>$imageDisplayDurationsplit,'imageDisplayDuration'=>$imageDisplayDuration,'created_date'=>date("Y-m-d H:i:s"),'status'=>2,'devices_id'=>$devices_id,'adCategory'=>$adCategory,'start_date'=>$start_date,'end_date'=>$end_date,'user_id'=>$user_id);
						
			if($_FILES['image-file']["name"] != '')
			{	
				$folders = array("Ads_images");				
				$images = $_FILES['image-file'];							
				/*$filename = $this->uploaddata->upload_multiple_images($images,$folders);
				$trainerarray['adFile'] = implode(",",$filename);*/
				$filename = $this->uploaddata->uploadImages($images,$folders);
				$trainerarray['adFile'] = $filename;
			}
			if($_FILES['sample_video']["name"] != '')
			{	
				$folders_video = array("Ads_videos");				
				$video = $_FILES['sample_video'];							
				$filename_video = $this->uploaddata->uploadImages($video,$folders_video,$type=1);
				$trainerarray['adFile'] = $filename_video;
			}
			$res = $this->ads_model->save($trainerarray);
			if($res > 0){
				$this->prepare_flashmessage("Ads ".($id==''?'adding':'updationg')." successfully..", 0);
				redirect('admin/viewads');
			}else{
				$this->prepare_flashmessage("Ads ".($id==''?'adding':'updationg')." in error..", 1);
				redirect('admin/addads');
			}
		}else{
			$views = array('addads');
		    $deviceData = $this->devices_model->getAllData($status='active');
			$data = array('views'=>$views,'deviceData'=>$deviceData);
			$this->load->view('admin/template/template',$data);
		}
	}
	public function viewads(){
		$views = array('viewads');
		$user_id = $this->session->userdata('id');
		$adsdata = $this->ads_model->getAllAdsData(null,null,$user_id);
		$data = array('views'=>$views,'adsdata'=>$adsdata);
		$this->load->view('admin/template/template',$data);
	}
	public function editads(){
		$id = $this->uri->segment(3);
		$adData = $this->ads_model->getDataById($id);
		$views = array('editads');
	    $deviceData = $this->devices_model->getAllData($status='active');
		$data = array('views'=>$views,'deviceData'=>$deviceData,'adData'=>$adData);
		$this->load->view('admin/template/template',$data);

	}
	public function updateads(){
		$this->form_validation->set_rules('adTitle','title','trim|required');
		$this->form_validation->set_rules('adType','adType','trim|required');
		$this->form_validation->set_rules('adDuration','adDuration','trim|required');
		$this->form_validation->set_rules('add_locations','add_locations','trim|required');
		$this->form_validation->set_rules('devices_id','devices_id','trim|required');
		$this->form_validation->set_rules('id','id','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$adTitle = $this->input->post("adTitle");
			$adType = $this->input->post("adType");
			$adDuration = $this->input->post("adDuration");
			$add_locations = $this->input->post("add_locations");
			$devices_id = $this->input->post("devices_id");
			$adCategory = $this->input->post("adCategory");
			$status = $this->input->post("status");
			$user_id = $this->input->post("user_id");
			$adData = $this->session->userdata('id');
			/*if(!empty($this->input->post("isLiveEnabled"))){
				$isLiveEnabled = $this->input->post("isLiveEnabled");
			}else{
				$isLiveEnabled = 'false';
			}*/
			if(!empty($this->input->post("adCategory"))){
				$isLiveEnabled = 'false';
			}else{
				$isLiveEnabled = 'true';
			}
			if(!empty($this->input->post("imageDisplayDurationsplit"))){
				$imageDisplayDurationsplit = $this->input->post("imageDisplayDurationsplit");
			}else{
				$imageDisplayDurationsplit = 'false';
			}
			$imageDisplayDuration = $this->input->post("imageDisplayDuration");
			$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('start_date'));
			$start_date = $myDateTime->format('Y-m-d H:i:s');
			$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('end_date'));
			$end_date = $myDateTime->format('Y-m-d H:i:s');
			$trainerarray = array('adTitle'=>$adTitle,'adType'=>$adType,'adDuration'=>$adDuration,'add_locations'=>$add_locations,'isLiveEnabled'=>$isLiveEnabled,'imageDisplayDurationsplit'=>$imageDisplayDurationsplit,'imageDisplayDuration'=>$imageDisplayDuration,'updated_date'=>date("Y-m-d H:i:s"),'status'=>$status,'devices_id'=>$devices_id,'adCategory'=>$adCategory,'start_date'=>$start_date,'end_date'=>$end_date,'user_id'=>$user_id);
						
			if($_FILES['image-file']["name"] != '')
			{	
				if($adData['adFile'] != ''){
					@unlink("uploads/Ads_images/".$adData['adFile']);
				}
				$folders = array("Ads_images");				
				$images = $_FILES['image-file'];							
				/*$filename = $this->uploaddata->upload_multiple_images($images,$folders);
				$trainerarray['adFile'] = implode(",",$filename);*/
				$filename = $this->uploaddata->uploadImages($images,$folders);
				$trainerarray['adFile'] = $filename;
			}
			if($_FILES['sample_video']["name"] != '')
			{	
				if($adData['adFile'] != ''){
					@unlink("uploads/Ads_videos/".$adData['adFile']);
				}
				$folders_video = array("Ads_videos");				
				$video = $_FILES['sample_video'];							
				$filename_video = $this->uploaddata->uploadImages($video,$folders_video,$type=1);
				$trainerarray['adFile'] = $filename_video;
			}
			$res = $this->ads_model->update($trainerarray,$id);
			if($res > 0){
				$this->prepare_flashmessage("Ads updating successfully..", 0);
				redirect('admin/viewads');
			}else{
				$this->prepare_flashmessage("Ads updating in error..", 1);
				redirect('admin/editads');
			}
		}else{
			$id = $this->input->post('id');
			$adData = $this->ads_model->getDataById($id);
			$views = array('editads');
		    $deviceData = $this->devices_model->getAllData($status='active');
			$data = array('views'=>$views,'deviceData'=>$deviceData,'adData'=>$adData);
			$this->load->view('admin/template/template',$data);
		}
	}
	public function ad_delete(){
		$this->form_validation->set_rules('id','id','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post("id");
			$adData = $this->ads_model->getDataById($id);
			$res = $this->ads_model->deleteAd($id);
			if($res > 0){
				if($adData['adType'] == 'image'){
					@unlink("uploads/Ads_images/".$adData['adFile']);
				}else{
					@unlink("uploads/Ads_videos/".$adData['adFile']);
				}
				
				$result['success'] = 1;
				$result['message'] = "success";
			}else{
				$result['success'] = 2;
				$result['message'] = "Error"; 
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		 echo json_encode($result);		
	}
	public function userdetails(){
		    $views = array('user-details');
			$data = array('views'=>$views);
			$this->load->view('admin/template/template',$data);
	}
	
	public function adddevice(){
	    $views = array('adddevice');
		$device = array();
	    $deviceData = $this->devices_model->getAllData();
		$id = $this->uri->segment(3);
		if(!empty($id)){
			$device = $this->devices_model->getDataById($id);
		}
		$data = array('views'=>$views,'deviceData'=>$deviceData,'device'=>$device);
		$this->load->view('admin/template/template',$data);
	}
	public function savedevice(){
		$this->form_validation->set_rules('devices_id', 'devices_id', 'trim|required');
		$this->form_validation->set_rules('device_name', 'device_name', 'trim|required');
		if ($this->form_validation->run())
		{
			$devices_id = $this->input->post("devices_id");
			$device_name = $this->input->post("device_name");
			$device_location = $this->input->post("device_location");
			$status = $this->input->post("status");
			$deviceArray = array(
				'device_name'=>$device_name,
				'device_location'=>$device_location,				
				'updated_date'=>date("Y-m-d H:i:s")
				);
			if(!empty($this->input->post('id'))){
				$deviceArray['status']=$status;
			}
			$res = $this->devices_model->updateDevicedata($deviceArray,$devices_id);
			if($res > 0){
				$this->prepare_flashmessage("Device Data Updated successfully..", 0);
			}else{
				$this->prepare_flashmessage("Device Data Updating in error..", 1);
			}			
			redirect('admin/viewDevices');
		}else{
			$views = array('adddevice');
			$device = array();
			$deviceData = $this->devices_model->getAllData($status='active');
			$id = $this->input->post('id');
			if(!empty($id)){
				$device = $this->devices_model->getDataById($id);
			}
			$data = array('views'=>$views,'deviceData'=>$deviceData,'device'=>$device);
			$this->load->view('admin/template/template',$data);
		}
	}
	public function viewDevices(){
		$views = array('viewDevices');
		$devicedata = $this->devices_model->getAllData();
		$data = array('views'=>$views,'devicedata'=>$devicedata);
		$this->load->view('admin/template/template',$data);
	}
	public function deletedevice(){
		$this->form_validation->set_rules('id','id','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post("id");
			$res = $this->devices_model->deleteDevice($id);
			if($res > 0){				
				$result['success'] = 1;
				$result['message'] = "success";
			}else{
				$result['success'] = 2;
				$result['message'] = "Error"; 
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		 echo json_encode($result);
	}
	public function getDeviceDataByDeviceId(){
		$this->form_validation->set_rules('device_id','device_id','trim|required');
		if($this->form_validation->run())
		{
			$device_id = $this->input->post("device_id");
			$res = $this->devices_model->getDataById($device_id);
			if($res > 0){				
				$result['success'] = 1;
				$result['device'] = $res;
			}else{
				$result['success'] = 2;
				$result['message'] = "Error"; 
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		 echo json_encode($result);
	}
	public function logout()
    {
        $this->session->sess_destroy();
        $this->index();
    }
}