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
			$this->load->model('ad_selected_devices_model');
			$this->load->model('services_model');
			$this->load->model('franchise_selected_services_model');
			$this->load->model("modules_model");
			$this->load->model("module_pages_model"); 
			$this->load->model("module_role_model");
			$this->load->model("role_selected_module_model"); 
			$this->load->model("role_selected_module_pages_model");
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
			$this->load->view('admin/index');  
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
			$userDetails = $this->admin_model->isAdminExists($userDetails);
			if(!empty($userDetails))
			{
				$this->session->set_userdata($userDetails);
				redirect("admin/createAdminUser");
			}else{
				$this->prepare_flashmessage("Enter currect username and password..", 1);
				$this->load->view('admin/index');
			}

		}else
		{			
		  $this->load->view('admin/index');
		}
		
	}
	public function createAdminUser(){
		$views = array('createadminuser');
		$id = $this->uri->segment(3);
		if(!empty($id)){
			$trainerdata = $this->users_model->getUserDataById($id);
		}else{
			$trainerdata = array();
		}
		$data = array('views'=>$views,'trainerdata'=>$trainerdata);
		$this->load->view('admin/template/template',$data);
	}
	public function saveadminuser(){
		$this->form_validation->set_rules('fname','fname','trim|required');
		$this->form_validation->set_rules('lname','lname','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('mobile','mobile','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		if(empty($this->input->post('id'))){
			$this->form_validation->set_rules('password','password','trim|required');
		}
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$fname = $this->input->post("fname");
			$lname = $this->input->post("lname");
			$email = $this->input->post("email");
			$mobile = $this->input->post("mobile");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$address = $this->input->post("address");	
			$city = $this->input->post("city");
			$state = $this->input->post("state");
			$zip = $this->input->post("zip");
			$country = $this->input->post("country");
			$user_type  = 1;
			if(empty($id)){				
				$count = $this->users_model->countusers($username);
			}else{
				$count = $this->users_model->countusers($username,$id);
			}
			if($count == 0){
				$trainerarray = array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'mobile'=>$mobile,'username'=>$username,'password'=>$password,'address'=>$address,'status'=>2,'city'=>$city,'state'=>$state,'zip'=>$zip,'country'=>$country,'user_type'=>1);
				if(!empty($password)){
					$trainerarray['password'] = md5($password);
				}
				if(empty($id)){
					$trainerarray['created_date'] = date("Y-m-d H:i:s");
					$res = $this->users_model->saveUser($trainerarray);
				}else{
					$trainerarray['updated_date'] = date("Y-m-d H:i:s");
					$res = $this->users_model->updateUserdata($trainerarray,$id);
				}
				if($res > 0){
					$this->prepare_flashmessage("Admin user ".($id==''?'adding':'updationg')." successfully..", 0);
					redirect('admin/createAdminUser');
				}else{
					$this->prepare_flashmessage("Admin user ".($id==''?'adding':'updationg')." in error..", 1);
					redirect('admin/createAdminUser');
				}
			}else{
				$this->prepare_flashmessage("This ".$username." already register please try another username", 1);
				redirect('admin/createAdminUser');
			}
		}else{
			$views = array('createadminuser');
			$id = $this->input->post('id');
			if(!empty($id)){
				$trainerdata = $this->users_model->getUserDataById($id);
			}else{
				$trainerdata = array();
			}
			$data = array('views'=>$views,'trainerdata'=>$trainerdata);
			$this->load->view('admin/template/template',$data);
		}
		
	}
	public function viewAdminUser(){
		    $views = array('user-registration');
			$userData = $this->users_model->getAllUsers($user_type=1);
			$data = array('views'=>$views,'userData'=>$userData);
			$this->load->view('admin/template/template',$data);
	}
	public function viewUsers(){
		    $views = array('viewUsers');
			$userData = $this->users_model->getAllUsers($user_type=2);
			$data = array('views'=>$views,'userData'=>$userData);
			$this->load->view('admin/template/template',$data);
	}
	public function deleteuser(){
		$this->form_validation->set_rules('user_id','user_id','trim|required');
		if($this->form_validation->run())
		{
			$user_id = $this->input->post("user_id");
			//$userdate = $this->users_model->getUserDataById($user_id);
			$res = $this->users_model->deleteuser($user_id);
			if($res > 0){
				//@unlink("uploads/user_profile_pic/".$userdate['profile_pic']);
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
	public function updateuserstatus(){
		$this->form_validation->set_rules('user_id','user_id','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		if($this->form_validation->run())
		{
			$user_id = $this->input->post("user_id");
			$status = $this->input->post("status");
			$userarray = array('status'=>$status);
			$res = $this->users_model->updateUserdata($userarray,$user_id);
			if($res > 0){
				$result['success'] = 1;
				$result['message'] = "success";
				$result['statusmessage'] = ($status == 1)?'Activated':'Deactivated';
			}else{
				$result['success'] = 2;
				$result['message'] = "Error"; 
				$result['statusmessage'] = ($status == 1)?'Activated':'Deactivated';
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		 echo json_encode($result);
	}
	public function addads(){
	    $views = array('addads');
	    $deviceData = $this->devices_model->getAllDeviceData($status='active');
		$userData = $this->users_model->getAllUsers($user_type=1);		
		$servicesData = $this->services_model->getAllServices($status=1,$franchise_id=null);
		$franchiseData = $this->users_model->getAllUsers($user_type=3);
		$data = array('views'=>$views,'deviceData'=>$deviceData,'userData'=>$userData,'servicesData'=>$servicesData,'franchiseData'=>$franchiseData);
		$this->load->view('admin/template/template',$data);
	}
	public function saveads(){
		$this->form_validation->set_rules('adTitle','title','trim|required');
		$this->form_validation->set_rules('adType','adType','trim|required');
		//$this->form_validation->set_rules('adDuration','adDuration','trim|required');
		//$this->form_validation->set_rules('add_locations','add_locations','trim|required');
		$this->form_validation->set_rules('devices_id[]','devices_id','trim|required');
		if(!empty($this->input->post('isUserCreate'))){
			$this->form_validation->set_rules('fname','fname','trim|required');
			$this->form_validation->set_rules('lname','lname','trim|required');
			$this->form_validation->set_rules('email','email','trim|required');
			$this->form_validation->set_rules('mobile','mobile','trim|required');
			$this->form_validation->set_rules('username','username','trim|required');
			//$this->form_validation->set_rules('password','password','trim|required');
		}
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$adTitle = $this->input->post("adTitle");
			$adType = $this->input->post("adType");
			$adDuration = $this->input->post("adDuration");
			$add_locations = $this->input->post("add_locations");
			$devices_id = $this->input->post("devices_id[]");
			$adCategory = $this->input->post("adCategory");
			$service_id = $this->input->post("service_id[]");
			$franchise_id = $this->input->post("franchise_id");
			/*if(!empty($this->input->post("isLiveEnabled"))){
				$isLiveEnabled = $this->input->post("isLiveEnabled");
			}else{
				$isLiveEnabled = 'false';
			}*/
			$fname = $this->input->post("fname");
			$lname = $this->input->post("lname");
			$email = $this->input->post("email");
			$mobile = $this->input->post("mobile");
			$username = $this->input->post("username");
			$password = md5($this->input->post("password"));
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
			$user_type  = 2;
			if(!empty($this->input->post('isUserCreate'))){				
				//$count = $this->users_model->countusers($username);
				$user = $this->users_model->checkuserByCondition(array('username'=>$username,'user_type'=>2));
				if(!empty($user)){
					/* $this->prepare_flashmessage("This ".$username." already registered,please retry another username..", 1);
					redirect('admin/addads');
					exit; */
					$user_id = $user['id'];
				}else{
					$trainerarray = array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'mobile'=>$mobile,'username'=>$username,'password'=>$password,'user_type'=>$user_type);
					$trainerarray['created_date'] = date("Y-m-d H:i:s");
					$userId = $this->users_model->saveUser($trainerarray);
					$user_id = $userId;
				}
			}else{
				$user_id = 0;
			}
			if(!empty($this->input->post('isEnableStartEndDate'))){
				$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('start_date'));
				$start_date = $myDateTime->format('Y-m-d H:i:s');
				$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('end_date'));
				$end_date = $myDateTime->format('Y-m-d H:i:s');
				$isEnableStartEndDate = $this->input->post('isEnableStartEndDate');
			}else{
				$start_date = '0000-00-00 00:00:00';
				$end_date = '0000-00-00 00:00:00';
				$isEnableStartEndDate = 'no';
			}
			$imageDisplayDuration = $this->input->post("imageDisplayDuration");
			$adarray = array('adTitle'=>$adTitle,'adType'=>$adType,'adDuration'=>$adDuration,'add_locations'=>$add_locations,'isLiveEnabled'=>$isLiveEnabled,'imageDisplayDurationsplit'=>$imageDisplayDurationsplit,'imageDisplayDuration'=>$imageDisplayDuration,'created_date'=>date("Y-m-d H:i:s"),'status'=>2,'adCategory'=>$adCategory,'start_date'=>$start_date,'end_date'=>$end_date,'user_id'=>$user_id,'isEnableStartEndDate'=>$isEnableStartEndDate,'franchise_id'=>$franchise_id);
						
			if($_FILES['image-file']["name"] != '')
			{	
				$folders = array("Ads_images");				
				$images = $_FILES['image-file'];							
				/*$filename = $this->uploaddata->upload_multiple_images($images,$folders);
				$adarray['adFile'] = implode(",",$filename);*/
				$filename = $this->uploaddata->uploadImages($images,$folders);
				$adarray['adFile'] = $filename;
			}
			if($_FILES['sample_video']["name"] != '')
			{	
				$folders_video = array("Ads_videos");				
				$video = $_FILES['sample_video'];							
				$filename_video = $this->uploaddata->uploadImages($video,$folders_video,$type=1);
				$adarray['adFile'] = $filename_video;
			}
			$ad_id = $this->ads_model->save($adarray);
			if($ad_id > 0){
				if(!empty($devices_id)){
					$finalAdsArray = array();
					foreach($devices_id as $did){
						$serviceData = $this->services_model->getServiceDataById($service_id[$did]);
						$expiryDate = $this->getExpiryDate($serviceData);
						$deviceArray = array();
						$deviceArray['ad_id'] = $ad_id;
						$deviceArray['devices_id'] = $did;
						$deviceArray['service_id'] = $service_id[$did];
						$deviceArray['expiry_date'] = $expiryDate;
						$deviceArray['status'] = 2;
						array_push($finalAdsArray,$deviceArray);
					}
					if(!empty($finalAdsArray)){
						$this->ad_selected_devices_model->saveSelectedDevices($finalAdsArray);
					}
				}
				$this->prepare_flashmessage("user ".($id==''?'adding':'updationg')." successfully..", 0);
				redirect('admin/viewads');
			}else{
				$this->prepare_flashmessage("Ads ".($id==''?'adding':'updationg')." in error..", 1);
				redirect('admin/addads');
			}
		}else{
			$views = array('addads');
		    $deviceData = $this->devices_model->getAllData($status='active');
			$userData = $this->users_model->getAllUsers($user_type=1);
			$data = array('views'=>$views,'deviceData'=>$deviceData,'userData'=>$userData);
			$this->load->view('admin/template/template',$data);
		}
	}
	public function getExpiryDate($serviceData){
		$days = 0;
		if(!empty($serviceData)){			
			if($serviceData['unittype'] == 2){
				$days = $serviceData['unit']*30;
			}else if($serviceData['unittype'] == 1){
				$days = $serviceData['unit']
			}else{
				$days = $days;
			}			
		}
		return date('Y-m-d H:i:s', strtotime("+$days days"));
	}
	public function viewads(){
		$views = array('viewads');
		$adsdata = $this->ads_model->getAllAds();
		$data = array('views'=>$views,'adsdata'=>$adsdata);
		$this->load->view('admin/template/template',$data);
	}
	public function editads(){
		$id = $this->uri->segment(3);
		$adData = $this->ads_model->getDataById($id);
		$views = array('editads');
	    $deviceData = $this->devices_model->getAllDeviceData($status='active');
		$userData = $this->users_model->getAllUsers($user_type=1);
		$selectedDevices = $this->ad_selected_devices_model->getDataByAdId($id);
		$servicesData = $this->services_model->getAllServices($status=1,$franchise_id=null);
		$data = array('views'=>$views,'deviceData'=>$deviceData,'adData'=>$adData,'userData'=>$userData,'selectedDevices'=>$selectedDevices,'servicesData'=>$servicesData);
		$this->load->view('admin/template/template',$data);

	}
	public function updateads(){
		$this->form_validation->set_rules('adTitle','title','trim|required');
		$this->form_validation->set_rules('adType','adType','trim|required');
		//$this->form_validation->set_rules('adDuration','adDuration','trim|required');
		//$this->form_validation->set_rules('add_locations','add_locations','trim|required');
		$this->form_validation->set_rules('devices_id[]','devices_id','trim|required');
		$this->form_validation->set_rules('id','id','trim|required');
		$this->form_validation->set_rules('user_id','user id','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		$this->form_validation->set_rules('fname','fname','trim|required');
		$this->form_validation->set_rules('lname','lname','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('mobile','mobile','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$adTitle = $this->input->post("adTitle");
			$adType = $this->input->post("adType");
			$adDuration = $this->input->post("adDuration");
			$add_locations = $this->input->post("add_locations");
			$devices_id = $this->input->post("devices_id[]");
			$adCategory = $this->input->post("adCategory");
			$service_id = $this->input->post("service_id");
			$status = $this->input->post("status");
			$user_id = $this->input->post("user_id");
			$fname = $this->input->post("fname");
			$lname = $this->input->post("lname");
			$email = $this->input->post("email");
			$mobile = $this->input->post("mobile");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$user_type  = 2;
			$count = $this->users_model->countusers($username,$user_id);
			if($count > 0){
				/* $this->prepare_flashmessage("This ".$username." already registered,please retry another username..", 1);
				redirect('admin/editads/'.$id);
				exit; */
			}else{
				$trainerarray = array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'mobile'=>$mobile,'username'=>$username,'user_type'=>$user_type,'updated_date'=>date("Y-m-d H:i:s"));
				if(!empty($password)){
					$trainerarray['password'] = $password;
				}
				$res = $this->users_model->updateUserdata($trainerarray,$user_id);
			}
			$adData = $this->ads_model->getDataById($id);
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
			if(!empty($this->input->post('isEnableStartEndDate'))){
				$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('start_date'));
				$start_date = $myDateTime->format('Y-m-d H:i:s');
				$myDateTime = DateTime::createFromFormat('d-m-Y H:i:s',$this->input->post('end_date'));
				$end_date = $myDateTime->format('Y-m-d H:i:s');
				$isEnableStartEndDate = $this->input->post('isEnableStartEndDate');
			}else{
				$start_date = '0000-00-00 00:00:00';
				$end_date = '0000-00-00 00:00:00';
				$isEnableStartEndDate = 'no';
			}
			$adarray = array('adTitle'=>$adTitle,'adType'=>$adType,'adDuration'=>$adDuration,'add_locations'=>$add_locations,'isLiveEnabled'=>$isLiveEnabled,'imageDisplayDurationsplit'=>$imageDisplayDurationsplit,'imageDisplayDuration'=>$imageDisplayDuration,'updated_date'=>date("Y-m-d H:i:s"),'status'=>$status,'adCategory'=>$adCategory,'start_date'=>$start_date,'end_date'=>$end_date,'user_id'=>$user_id,'service_id'=>$service_id);
						
			if($_FILES['image-file']["name"] != '')
			{	
				if($adData['adFile'] != ''){
					@unlink("uploads/Ads_images/".$adData['adFile']);
				}
				$folders = array("Ads_images");				
				$images = $_FILES['image-file'];							
				/*$filename = $this->uploaddata->upload_multiple_images($images,$folders);
				$adarray['adFile'] = implode(",",$filename);*/
				$filename = $this->uploaddata->uploadImages($images,$folders);
				$adarray['adFile'] = $filename;
			}
			if($_FILES['sample_video']["name"] != '')
			{	
				if($adData['adFile'] != ''){
					@unlink("uploads/Ads_videos/".$adData['adFile']);
				}
				$folders_video = array("Ads_videos");				
				$video = $_FILES['sample_video'];							
				$filename_video = $this->uploaddata->uploadImages($video,$folders_video,$type=1);
				$adarray['adFile'] = $filename_video;
			}
			$res = $this->ads_model->update($adarray,$id);
			if($res > 0){
				if(!empty($devices_id)){
					$finalAdsArray = array();
					foreach($devices_id as $did){
						$deviceArray = array();
						$deviceArray['ad_id'] = $id;
						$deviceArray['devices_id'] = $did;
						$deviceArray['status'] = 2;
						array_push($finalAdsArray,$deviceArray);
					}
					if(!empty($finalAdsArray)){
						$this->ad_selected_devices_model->saveSelectedDevices($finalAdsArray,$id);
					}
				}
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
			$userData = $this->users_model->getAllUsers($user_type=1);
			$data = array('views'=>$views,'deviceData'=>$deviceData,'adData'=>$adData,'userData'=>$userData);
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
	public function serverrefreshtime(){
		    $id = $this->uri->segment(3);			
			$propertiesData = $this->properties_model->getAllProperties(1);
		    $views = array('serverrefreshtime');
			$data = array('views'=>$views,'propertiesData'=>$propertiesData);
			$this->load->view('admin/template/template',$data);
	}
	public function saveserverrefreshtime(){			
		$this->form_validation->set_rules('serverrefreshtime', 'serverrefreshtime', 'trim|required');
		if ($this->form_validation->run())
		{
			$serverrefreshtime = $this->input->post("serverrefreshtime");
			$isBottom = (!empty($this->input->post("isBottom"))?$this->input->post("isBottom"):'false');
			$isTop = (!empty($this->input->post("isTop"))?$this->input->post("isTop"):'false');
			$isLeft = (!empty($this->input->post("isLeft"))?$this->input->post("isLeft"):'false');
			$isRight = (!empty($this->input->post("isRight"))?$this->input->post("isRight"):'false');
			$isFifty = (!empty($this->input->post("isFifty"))?$this->input->post("isFifty"):'false');
			$isTwentyFive = (!empty($this->input->post("isTwentyFive"))?$this->input->post("isTwentyFive"):'false');
			$isLshape = (!empty($this->input->post("isLshape"))?$this->input->post("isLshape"):'false');
			$id = $this->input->post('id');	
			$serverrefreshtimeArray = array(
				'serverrefreshtime'=>$serverrefreshtime,
				'isBottom'=>$isBottom,
				'isTop'=>$isTop,
				'isLeft'=>$isLeft,
				'isRight'=>$isRight,
				'isFifty'=>$isFifty,
				'isTwentyFive'=>$isTwentyFive,
				'isLshape'=>$isLshape
				);
			if(!empty($id)){	
				$serverrefreshtimeArray['updated_date']	= date("Y-m-d H:i:s");	
				$res = $this->properties_model->updatePropertiesdata($serverrefreshtimeArray,$id);
				if($res > 0){
					$this->prepare_flashmessage("Server Refresh Time Updated successfully..", 0);
				}else{
					$this->prepare_flashmessage("Server Refresh Time Updating in error..", 1);
				}
			}else{
				$serverrefreshtimeArray['created_date']	= date("Y-m-d H:i:s");
			    $res = $this->properties_model->saveProperties($serverrefreshtimeArray);
				if($res > 0){
					$this->prepare_flashmessage("Server Refresh Time adding successfully..", 0);
				}else{
					$this->prepare_flashmessage("Server Refresh Time adding in error..", 1);					
				}
			}				
			redirect('admin/serverrefreshtime');
		}else{
			$id = $this->input->post('id');
			$propertiesData = array();
			if(!empty($id)){
				$propertiesData = $this->properties_model->getPropertiesDataById($id);
			}
		    $views = array('serverrefreshtime');
			$data = array('views'=>$views,'propertiesData'=>$propertiesData);
			$this->load->view('admin/template/template',$data);
		}
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
	public function rebootDevice(){
		$this->form_validation->set_rules('id','device_id','trim|required');
		if($this->form_validation->run())
		{
			$device_id = $this->input->post("id");
			$deviceArray = array(
				'devicereboot'=>'yes',				
				'updated_date'=>date("Y-m-d H:i:s")
			); 
			$res = $this->devices_model->updateDevicedata($deviceArray,$device_id);
			if($res > 0){				
				$result['success'] = 1;
				$result['message'] = "Device reboot success";
			}else{
				$result['success'] = 2;
				$result['message'] = "Device reboot error"; 
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		 echo json_encode($result);
	}
	public function getUserDataByUserName(){
		$this->form_validation->set_rules('username','username','trim|required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$condition_array = array("username"=>$username,"user_type"=>2);
			$userData = $this->users_model->checkuserByCondition($condition_array);
			if(!empty($userData)){
				$result['success'] = 1;
				$result['user'] = $userData;
			}else{
				$result['success'] = 3;
				$result['message'] = "No data Found"; 
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		echo json_encode($result);
	}
	public function reStartDevice(){
		$this->form_validation->set_rules('id','device_id','trim|required');
		if($this->form_validation->run())
		{
			$device_id = $this->input->post("id");
			$deviceArray = array(
				'devicerestart'=>'yes',				
				'updated_date'=>date("Y-m-d H:i:s")
			); 
			$res = $this->devices_model->updateDevicedata($deviceArray,$device_id);
			if($res > 0){				
				$result['success'] = 1;
				$result['message'] = "Device restart success";
			}else{
				$result['success'] = 2;
				$result['message'] = "Device restart error"; 
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
    public function service(){
		$views = array('service');
		$id = $this->uri->segment(3);
		if(!empty($id)){
			$servicedata = $this->services_model->getServiceDataById($id);
		}else{
			$servicedata = array();
		}
		$data = array('views'=>$views,'servicedata'=>$servicedata);
		$this->load->view('admin/template/template',$data);
	}
	public function saveservice(){
		$this->form_validation->set_rules('servicename','servicename','trim|required');
		$this->form_validation->set_rules('price','price','trim|required');
		$this->form_validation->set_rules('unittype','unittype','trim|required');
		$this->form_validation->set_rules('unit','unit','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		$this->form_validation->set_rules('taxmode','taxmode','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$servicename = $this->input->post("servicename");
			$price = $this->input->post("price");
			$unittype = $this->input->post("unittype");
			$unit = $this->input->post("unit");
			$enabletax = (!empty($this->input->post("enabletax"))?$this->input->post("enabletax"):'2');
			$taxtype = $this->input->post("taxtype");
			$status = $this->input->post("status");
			$taxmode = $this->input->post("taxmode");
			$createdby = $this->session->userdata('id');
			$serviceArrar = array("servicename"=>$servicename,"price"=>$price,"unittype"=>$unittype,"unit"=>$unit,"enabletax"=>$enabletax,"taxtype"=>$taxtype,"status"=>$status,"taxmode"=>$taxmode,"createdby"=>$createdby);
			if($this->session->userdata('user_type') == 3){
				$serviceArrar['franchise_id'] = $this->session->userdata('id');
			}
			if(empty($id)){
				$serviceArrar['created_date'] = date("Y-m-d H:i:s");
				$res = $this->services_model->saveService($serviceArrar);
				$msg = "Adding";
			}else{
				$serviceArrar['updated_date'] = date("Y-m-d H:i:s");
				$res = $this->services_model->updateService($serviceArrar,$id);
				$msg = "Updating";
			}
			if($res > 0){
				$this->prepare_flashmessage("Service ".$msg." successfully..", 0);
				redirect('admin/service');
			}else{
				$this->prepare_flashmessage("Service ".$msg." in error..", 1);
				redirect('admin/service');
			}
		}else{
			$id = $this->input->post('id');
			$views = array('service');
			if(!empty($id)){
				$servicedata = $this->services_model->getServiceDataById($id);
			}else{
				$servicedata = array();
			}
			$data = array('views'=>$views,'servicedata'=>$servicedata);
			$this->load->view('admin/template/template',$data);
		}
	}
	public function viewservices(){
		$views = array('viewservices');
		$servicedata = $this->services_model->getAllServices();
		$data = array('views'=>$views,'servicedata'=>$servicedata);
		$this->load->view('admin/template/template',$data);
	}
	public function updateservicestatus(){
		$this->form_validation->set_rules('id','Service id','trim|required');
		$this->form_validation->set_rules('status','status','trim|required');
		if($this->form_validation->run())
		{
			$id = $this->input->post("id");
			$status = $this->input->post("status");
			$serviceArrar = array('status'=>$status);
			$res = $this->services_model->updateService($serviceArrar,$id);
			if($res > 0){
				$result['success'] = 1;
				$result['message'] = "success";
				$result['statusmessage'] = ($status == 1)?'Activated':'Deactivated';
			}else{
				$result['success'] = 2;
				$result['message'] = "Error"; 
				$result['statusmessage'] = ($status == 1)?'Activated':'Deactivated';
			}
		}else{
			$result['success'] = 2;
		    $result['message'] = validation_errors(); 
		}
		 echo json_encode($result);
	}
	public function franchise(){
		$views = array('franchise');
		$franchise_id = null;
		if($this->session->userdata('user_type') == 3){
			$franchise_id = $this->session->userdata('id');
		}
		$serviceData = $this->services_model->getAllServices(1,$franchise_id);
		$rolesData = $this->module_role_model->getAllModuleRols($status =2,$franchise_id);
		$id = $this->uri->segment(3);
		if(!empty($id)){
			$franchisedata = $this->users_model->getUserDataById($id);
			$francheSelectedServices = $this->franchise_selected_services_model->getServicesByFranchiseId($id);
			$serviceIds = array_column($francheSelectedServices, 'service_id');

		}else{
			$franchisedata = array();
			$serviceIds = array();
		}
		$data = array('views'=>$views,'franchisedata'=>$franchisedata,'serviceData'=>$serviceData,'serviceIds'=>$serviceIds,'rolesData'=>$rolesData);
		$this->load->view('admin/template/template',$data);
	}
	public function savefranchise(){
		$this->form_validation->set_rules('fname','fname','trim|required');
		$this->form_validation->set_rules('fname','fname','trim|required');
		$this->form_validation->set_rules('lname','lname','trim|required');
		$this->form_validation->set_rules('email','email','trim|required');
		$this->form_validation->set_rules('mobile','mobile','trim|required');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('franchisename','franchisename','trim|required');
		$this->form_validation->set_rules('ipaddress','ipaddress','trim|required');
		$this->form_validation->set_rules('role_id','role_id','trim|required');
		if(empty($this->input->post('id'))){
			$this->form_validation->set_rules('password','password','trim|required');
		}
		if($this->form_validation->run())
		{
			$id = $this->input->post('id');
			$fname = $this->input->post("fname");
			$lname = $this->input->post("lname");
			$email = $this->input->post("email");
			$mobile = $this->input->post("mobile");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$address = $this->input->post("address");	
			$city = $this->input->post("city");
			$state = $this->input->post("state");
			$zip = $this->input->post("zip");
			$country = $this->input->post("country");
			$status = $this->input->post("status");
			$franchisename = $this->input->post("franchisename");
			$franchiselocation = $this->input->post("franchiselocation");
			$logoimage = $this->input->post("logoimage");
			$ipaddress = $this->input->post("ipaddress");
			$role_id = $this->input->post("role_id");
			$services_id = $this->input->post("services_id[]");
			$user_type  = 3;
			if(empty($id)){				
				$count = $this->users_model->countusers($username);
			}else{
				$count = $this->users_model->countusers($username,$id);
			}
			if($count == 0){
				$trainerarray = array('fname'=>$fname,'lname'=>$lname,'email'=>$email,'mobile'=>$mobile,'username'=>$username,'password'=>$password,'address'=>$address,'status'=>$status,'city'=>$city,'state'=>$state,'zip'=>$zip,'country'=>$country,'user_type'=>$user_type,'franchisename'=>$franchisename,'franchiselocation'=>$franchiselocation,'ipaddress'=>$ipaddress,'module_role_id'=>$role_id);
				if(!empty($password)){
					$trainerarray['password'] = md5($password);
				}
				if($_FILES['logo']["name"] != '')
				{	
					if($logoimage != ''){
						@unlink("uploads/franchise_images/".$logoimage);
					}
					$folders = array("franchise_images");				
					$images = $_FILES['logo'];
					$filename = $this->uploaddata->uploadImages($images,$folders);
					$trainerarray['logo'] = $filename;
				}
				if(empty($id)){
					$trainerarray['created_date'] = date("Y-m-d H:i:s");
					$res = $this->users_model->saveUser($trainerarray);
					$franchise_id = $res;
					$temp = null;
				}else{
					$trainerarray['updated_date'] = date("Y-m-d H:i:s");
					$res = $this->users_model->updateUserdata($trainerarray,$id);
					$franchise_id = $id;
					$temp = $id;
				}
				if($res > 0){
					if(!empty($services_id)){
						$finalAdsArray = array();
						foreach($services_id as $sid){
							$deviceArray = array();
							$deviceArray['service_id'] = $sid;
							$deviceArray['franchise_id'] = $franchise_id;
							$deviceArray['created_date'] = date("Y-m-d H:i:s");
							array_push($finalAdsArray,$deviceArray);
						}
						
						if(!empty($finalAdsArray)){
							$this->franchise_selected_services_model->saveSelectedservices($finalAdsArray,$temp);
						}
					}
					$this->prepare_flashmessage("Franchise ".($id==''?'adding':'updationg')." successfully..", 0);
					redirect('admin/franchise');
				}else{
					$this->prepare_flashmessage("Franchise ".($id==''?'adding':'updationg')." in error..", 1);
					redirect('admin/franchise');
				}
			}else{
				$this->prepare_flashmessage("Franchise ".($id==''?'adding':'updationg')." in error..", 1);
				redirect('admin/franchise');
			}
		}else{
			$views = array('franchise');
			$franchise_id = null;
			if($this->session->userdata('user_type') == 3){
				$franchise_id = $this->session->userdata('id');
			}
			$serviceData = $this->services_model->getAllServices(1,$franchise_id);
			$id = $this->input->post('id');
			if(!empty($id)){
				$franchisedata = $this->users_model->getUserDataById($id);
				$francheSelectedServices = $this->franchise_selected_services_model->getServicesByFranchiseId($id);
				$serviceIds = array_column($francheSelectedServices, 'service_id');

			}else{
				$franchisedata = array();
				$serviceIds = array();
			}
			$data = array('views'=>$views,'franchisedata'=>$franchisedata,'serviceData'=>$serviceData,'serviceIds'=>$serviceIds);
			$this->load->view('admin/template/template',$data);
		}

	}
	public function viewfranchises(){
	    $views = array('viewfranchises');
		$userData = $this->users_model->getAllUsers($user_type=3);
		$data = array('views'=>$views,'userData'=>$userData);
		$this->load->view('admin/template/template',$data);
	}
	public function addroles() {
		$views = array('addroles');
        $modules = $this->modules_model->getAllModules();
        $modulePages = array();
        if(!empty($modules)){
            foreach($modules as $value){
                $modulePages[$value['id']] = $this->module_pages_model->getDataByModuleID($value['id']);
            }
        }
        $data = array('views'=>$views,'modules' => $modules, 'modulePages' => $modulePages);
        $this->load->view('admin/template/template', $data);
    }

    public function saveroles(){
        //echo "<pre>";print_r($_POST);exit;
        $this->form_validation->set_rules('roll_name','Roll name','trim|required');
        if($this->form_validation->run())
        {
            $role_name = $this->input->post("roll_name");
            $modules_id = $this->input->post("modules_id[]");
            $modules_page_id = $this->input->post("modules_page_id[]"); 
            $userDat = array("role_name"=>$role_name,
                            "status"=>2,
                            'created_date'=>date("Y-m-d H:i:s")
                            );
            $module_role_id = $this->module_role_model->saveRole($userDat);
            $modulerolearray = array();
            $pagearray = array();
            if($module_role_id > 0){
                if(isset($modules_id) && !empty($modules_id)){
                    foreach($modules_id as  $value)
                    {                        
                        $ugDetails = array();
                        $ugDetails['module_role_id'] = $module_role_id;
                        $ugDetails['modules_id'] = $value;
                        array_push($modulerolearray,$ugDetails);                        
                    }
                    foreach ($modules_page_id as $key => $value1) {
                        if(in_array($key,$modules_id)){
                            foreach ($value1 as $finalvalue) {
                                $serviceDetails = array();
                                $serviceDetails['module_role_id'] = $module_role_id;
                                $serviceDetails['modules_id'] = $key;
                                $serviceDetails['module_pages_id'] = $finalvalue;
                                array_push($pagearray,$serviceDetails); 
                            } 
                        }
                    }
                    $this->role_selected_module_model->saveSelectedModuleData($modulerolearray);
                    $this->role_selected_module_pages_model->saveSelectedModulePageData($pagearray);
                } 
                $status = 'success';
                $this->prepare_flashmessage("Role added successfully..", 0);
                redirect('admin/listroles');

            }else{
                $status = 'error';
                $this->prepare_flashmessage("Role added in error..", 1);
                redirect('admin/addroles');
            }

        }else{
            $views = array('addroles');
			$modules = $this->modules_model->getAllModules();
			$modulePages = array();
			if(!empty($modules)){
				foreach($modules as $value){
					$modulePages[$value['id']] = $this->module_pages_model->getDataByModuleID($value['id']);
				}
			}
			$data = array('views'=>$views,'modules' => $modules, 'modulePages' => $modulePages);
			$this->load->view('admin/template/template', $data);
        }
    }
    public function listroles(){  
		$views = array('listroles');
        $modulesRolesData = $this->module_role_model->getAllData($status=null,$createdby=null);
        $data = array('views'=>$views,'modulesRolesData' => $modulesRolesData);
        $this->load->view('admin/template/template', $data);
    }
    public function editroles() {
		$views = array('editroles');
        $module_id = $this->uri->segment(3);
        if(!empty($module_id)){
            $modules = $this->modules_model->getAllModules();
            $modulePages = array();
            if(!empty($modules)){
                foreach($modules as $value){
                    $modulePages[$value['id']] = $this->module_pages_model->getDataByModuleID($value['id']);
                }
            }
            $selectedModulePages = $this->module_role_model->getDataById($module_id);
            $modIDS = explode(",",$selectedModulePages['module_ids']);
            $modPageIDS = explode(",",$selectedModulePages['page_ids']);
            $data = array('views'=>$views,'modules' => $modules, 'modulePages' => $modulePages, 'modIDS'=>$modIDS, 'modPageIDS'=>$modPageIDS, 'selectedModulePages'=>$selectedModulePages);
            $this->load->view('admin/template/template', $data);
        }else{
            redirect('modules/listroles');          
        }
    }
    public function updateroles(){
        $this->form_validation->set_rules('roll_name','Roll name','trim|required');
        $this->form_validation->set_rules('status','status','trim|required');
        if($this->form_validation->run())
        {
            $role_name = $this->input->post("roll_name");
            $module_id = $this->input->post('module_id');
            $status = $this->input->post('status');
            $modules_id = $this->input->post("modules_id[]");
            $modules_page_id = $this->input->post("modules_page_id[]");
            $userDat = array("role_name"=>$role_name,
                            "status"=>$status,
                            'updated_date'=>date("Y-m-d H:i:s")
                            );
            $module_role_id = $this->module_role_model->updateRole($userDat,$module_id);
            $modulerolearray = array();
            $pagearray = array();
            if($module_role_id > 0){
                if(isset($modules_id) && !empty($modules_id)){
                    foreach($modules_id as  $value)
                    {                        
                        $ugDetails = array();
                        $ugDetails['module_role_id'] = $module_id;
                        $ugDetails['modules_id'] = $value;
                        array_push($modulerolearray,$ugDetails);                        
                    }
                    foreach ($modules_page_id as $key => $value1) {
                        if(in_array($key,$modules_id)){
                            foreach ($value1 as $finalvalue) {
                                $serviceDetails = array();
                                $serviceDetails['module_role_id'] = $module_id;
                                $serviceDetails['modules_id'] = $key;
                                $serviceDetails['module_pages_id'] = $finalvalue;
                                array_push($pagearray,$serviceDetails); 
                            } 
                        }
                    }
                    $this->role_selected_module_model->saveSelectedModuleData($modulerolearray,$module_id);
                    $this->role_selected_module_pages_model->saveSelectedModulePageData($pagearray,$module_id);
                } 
                $status = 'success';
                $this->prepare_flashmessage("Role updated successfully..", 0);
                redirect('admin/listroles');

            }else{
                $status = 'error';
                $this->prepare_flashmessage("Role updated in error..", 1);
                redirect('admin/editroles/'.$module_id);
            }

        }else{
            $views = array('editroles');
			$module_id = $this->input->post('module_id');
			if(!empty($module_id)){
				$modules = $this->modules_model->getAllModules();
				$modulePages = array();
				if(!empty($modules)){
					foreach($modules as $value){
						$modulePages[$value['id']] = $this->module_pages_model->getDataByModuleID($value['id']);
					}
				}
				$selectedModulePages = $this->module_role_model->getDataById($module_id);
				$modIDS = explode(",",$selectedModulePages['module_ids']);
				$modPageIDS = explode(",",$selectedModulePages['page_ids']);
				$data = array('views'=>$views,'modules' => $modules, 'modulePages' => $modulePages, 'modIDS'=>$modIDS, 'modPageIDS'=>$modPageIDS, 'selectedModulePages'=>$selectedModulePages);
				$this->load->view('admin/template/template', $data);
			}else{
				redirect('modules/listroles');          
			}
        }
    }
}