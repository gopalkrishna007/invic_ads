<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');	
class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$request_method = $this->router->fetch_method();
			$allowed = array(
							'index','verifyuser','userregister','verifyotp','trainerbooknow'
						);
			/* if( $this->session->userdata('userDetails') != null && $this->session->userdata['userDetails']['user_type'] == 1)
			{    
			}else{
				  if(!in_array($request_method, $allowed)) 
					redirect(base_url()); 
			} */
	   $this->load->library('Uploaddata');
	   $this->load->library('Sms');
	   $this->load->model('ads_model');
	   $this->load->model('properties_model');
	   $this->load->model('devices_model');
	   $this->load->model('adplay_model');
	   $this->load->model("multipleplayerads_model");
	}
	public function getAllAdsData_service(){
		$deviceid = $this->input->get('device_id');
		if(!empty($deviceid)){
			$devDat = explode("_",$deviceid);
			$device_id = $devDat[0];
			$franchise_id = $devDat[1];
			$deviceDat = $this->devices_model->getDataByDevice($device_id,$franchise_id);
			if(!empty($deviceDat)){
				$AdsData = $this->ads_model->getAllAdsData($status=2,$deviceDat['id'],null,$franchise_id);
				$propertiesData = $this->properties_model->getAllProperties(1);
				if(!empty($AdsData))
				{
					$adsDataArray = array();
					foreach($AdsData as $dat){
						if($dat['adType'] == 'image'){
							/*$images = explode(",",$dat['adFile']);
							$imageArray = array();
							foreach ($images as $key => $value) {
								$imageArray1 = array("image"=>base_url()."uploads/Ads_images/".$value,'imageDisplayDuration'=>$dat['imageDisplayDuration'],'imageDisplayDurationsplit'=>$dat['imageDisplayDurationsplit']);
								array_push($imageArray,$imageArray1);
							}
							$dat['adFile'] = $imageArray;*/
							$dat['adFile'] = base_url()."uploads/Ads_images/".$dat['adFile'];

						}else{
							/*$dat['adFile'] = array("image"=>base_url()."uploads/Ads_videos/".$dat['adFile']);*/
							$dat['adFile'] = base_url()."uploads/Ads_videos/".$dat['adFile'];
						}
						//array_push($adsDataArray,$dat);
						if($dat['playerNum'] == 2){
							$dat['playerData'] = $this->multipleplayerads_model->getDataByAdId($dat['id'],$deviceDat['id']);							
						}else{
							$dat['playerData'] = array();
						}
						array_push($adsDataArray,$dat);
					}
					/*$deviceArray = array(
						'lastCommunicareTime'=>date("Y-m-d H:i:s")
					);
					$deviceResponce = $this->devices_model->updateDevicedataByDeviceID($deviceArray,$device_id);*/
					$result['results']=$adsDataArray;
					$result['message'] = 'Ads Links';
					$result['imageUri'] = base_url()."uploads/Ads_images/";
					$result['videoUri'] =  base_url()."uploads/Ads_videos/";
					$result['serverrefreshtime'] = (!empty($propertiesData)?$propertiesData['serverrefreshtime']:'0');
					$result['code'] = 200;
				}else{
					$result['results']=[];
					$result['code'] = 400;
					$result['message'] = "No data found";
				}
			}else{
				$result['results']=[];
				$result['code'] = 400;
				$result['message'] = "Device Id not found";
			}
		}else{
			$result['results']=[];
			$result['code'] = 400;
			$result['message'] = "Device Id Required";
		}
		echo json_encode($result);
	}
	public function addDivices(){
	    //$_POST = json_decode(file_get_contents('php://input'), true);
		$device_id = $this->input->post('device_id');
		if($device_id != ''){
			$count = $this->devices_model->getCountByDevice($device_id);
			if($count == 0){
				$deviceArray = array(
				'device_id'=>$device_id,
				'status'=>'active',
				'created_date'=>date("Y-m-d H:i:s")
				);
				$deviceID = $this->devices_model->saveData($deviceArray);
				if($deviceID > 0){
					$deviceDataArray = array(
						'lastCommunicareTime'=>date("Y-m-d H:i:s")
					);
					$this->devices_model->updateDevicedataByDeviceID($deviceDataArray,$deviceID);
					$result['code'] = 200;
					$result['message'] = "Device adding successfully.";
				}else{
					$result['code'] = 400;
					$result['message'] = "Device adding in error.";
				}
			}else{
				$deviceDat = $this->devices_model->getDataByDevice($device_id);
				$deviceDataArray = array(
					'lastCommunicareTime'=>date("Y-m-d H:i:s")
				);
				$this->devices_model->updateDevicedataByDeviceID($deviceDataArray,$deviceDat['id']);
				$result['code'] = 400;
				$result['message'] = "Device ID alredy registered.";
			}
		}else{
			$result['code'] = 400;
			$result['message'] = "Device id can not be empty.";
		}
		echo json_encode($result);
	}
	public function adPlayCount(){
	    //$_POST = json_decode(file_get_contents('php://input'), true);
	    $this->form_validation->set_rules('device_id','device_id','trim|required');
		$this->form_validation->set_rules('count','count','trim|required');
		$this->form_validation->set_rules('ad_id','ad_id','trim|required');
		if($this->form_validation->run())
		{
			$device_id = $this->input->post('device_id');
			$count = $this->input->post('count');
			$ad_id = $this->input->post('ad_id');
			$deviceArray = array(
			'device_id'=>$device_id,
			'count'=>$count,
			'ads_id'=>$ad_id,
			'created_date'=>date("Y-m-d H:i:s")
			);
			$deviceResponce = $this->adplay_model->saveData($deviceArray);
			if($deviceResponce > 0){
				$result['code'] = 200;
				$result['message'] = "Ad play count adding successfully.";
			}else{
				$result['code'] = 400;
				$result['message'] = "Ad play count adding in error.";
			}
		}else{
			$result['code'] = 400;
			$result['message'] = validation_errors();
		}
		echo json_encode($result);
	}
	public function DeviceReboot(){
		$this->form_validation->set_rules('device_id','device_id','trim|required');
		if($this->form_validation->run())
		{
			$device_id = $this->input->post('device_id');
			$devicdData = $this->devices_model->getDataByDevice($device_id);
			if(!empty($devicdData)){
				$rebootData = array();
				if($devicdData['devicereboot'] == 'yes'){
					$rebootData['devicereboot'] = 'yes';
					$this->devices_model->updateDevicedataByDeviceID(array('devicereboot'=>'no'),$device_id);
				}else{
					$rebootData['devicereboot'] = 'no';
				}
				if($devicdData['devicerestart'] == 'yes'){
					$rebootData['devicerestart'] = 'yes';
					$this->devices_model->updateDevicedataByDeviceID(array('devicerestart'=>'no'),$device_id);
				}else{
					$rebootData['devicerestart'] = 'no';
				}
				$result['results']=$rebootData;
				$result['message'] = 'success';
				$result['code'] = 200;
			}else{
				$result['code'] = 400;
				$result['message'] = "Device Id not found.";
			}
		}else{
			$result['code'] = 400;
			$result['message'] = validation_errors();
		}
		echo json_encode($result);
	}
	public function getDiviceData(){
	    //$_POST = json_decode(file_get_contents('php://input'), true);
		$device_id = $this->input->get('device_id');
		if($device_id != ''){
			$deviceData = $this->devices_model->getDataByDevice($device_id);
			if(!empty($deviceData)){				
				$result['code'] = 200;
				$result['deviceData'] = $deviceData;
				$result['message'] = "Success";
			}else{
				$result['code'] = 400;
				$result['message'] = "Fail";
			}
		}else{
			$result['code'] = 400;
			$result['message'] = "Device id can not be empty.";
		}
		echo json_encode($result);
	}
	public function getPlayerImagesByPosition(){
		$this->form_validation->set_rules('device_id','device_id','trim|required');
		$this->form_validation->set_rules('position','position','trim|required');
		$this->form_validation->set_rules('type','type','trim|required');
		if($this->form_validation->run())
		{
			$device_id = $this->input->post('device_id');
			$position = $this->input->post('position');
			$type = $this->input->post('type');
			$playerData = $this->multipleplayerads_model->getDataByPositionAndDeviceID($position,$device_id,$type);
			if(!empty($playerData)){
				$playerData['fileurl'] = base_url("uploads/Ads_images/");
				$result['results']=$playerData;
				$result['message'] = 'success';
				$result['code'] = 200;
			}else{
				$result['code'] = 400;
				$result['message'] = "Device Id not found.";
			}
		}else{
			$result['code'] = 401;
			$result['message'] = validation_errors();
		}
		echo $result;
	}
}
