<link href="<?= base_url() ?>assets/css/sumoselect.css" rel="stylesheet" />
<script src="<?= base_url() ?>assets/js/sumoselect.js"></script>
<style>
 .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
.note-btn{
	padding:7px 10px !important;
}
.SumoSelect .select-all {
    padding: 8px 0px 3px 35px;
    height: 32px;
}
 </style>
<div class="page-content">

<div id="portlet-config" class="modal hide">
<div class="modal-header">
<button data-dismiss="modal" class="close" type="button"></button>
<h3>Widget Settings</h3>
</div>
<div class="modal-body"> Widget settings form goes here </div>
</div>
<div class="clearfix"></div>
<div class="content">
<ul class="breadcrumb">
<li>
<p>YOU ARE HERE</p>
</li>
<li><a href="#" class="active">Create Ads</a> </li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>Create <span class="semi-bold">New</span> Ads </h3>
</div>

<div class="row">
<div class="col-md-12">
<div class="grid simple">
<div class="grid-title no-border">
<h4></h4>
</div>
<div><?php echo $this->session->flashdata('message'); echo validation_errors(); ?> </div>
<div class="grid-body no-border"> <br>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<form action="<?= base_url("admin/updateads") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data">
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Title</label>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="adTitle" required value="<?= $adData['adTitle'] ?>" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Device Name</label>
    </div>
    <div class="col-md-4">
        <!--<select id="adDevice" style="width:100%" name="devices_id" required>
            <option value="">SELECT DEVICE NAME</option>
            <?php foreach($deviceData as $ddata){ ?>
            <option value="<?= $ddata['id'] ?>" <?= ($adData['devices_id']==$ddata['id']?'SELECTED':'') ?>><?= $ddata['device_name'] ?></option>
            <?php } ?>
        </select>-->
		<?php $devicdIds = array_column($selectedDevices, 'devices_id'); ?>
		<select class="form-control testSelAll1" name="devices_id[]" placeholder="SELECT DEVICE NAME" multiple="multiple" required>	
            <?php foreach($deviceData as $ddata){ ?>
            <option value="<?= $ddata['id'] ?>" <?= (in_array($ddata['id'], $devicdIds)?'SELECTED':'') ?> ><?= $ddata['device_name'] ?></option>
            <?php } ?>
		</select>
    </div>
    <div class="clearfix"></div>    
</div>
<div class="form-group">
	<div class="col-md-3">
		<label class="form-label">Ad's Service</label>
	</div>
	<div class="col-md-4">
		<select id="service_id" style="width:100%" name="service_id">
			<option value="">SELECT SERVICE NAME</option>
			<?php foreach($servicesData as $srvData){ ?>
			<option value="<?= $srvData['id'] ?>" <?= ($srvData['id'] == $adData['service_id'] ?'SELECTED':'') ?>><?= ucwords($srvData['servicename']) ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="clearfix"></div>
</div>
<div class="form-group">
     <div class="col-md-3">
        <label class="form-label">Type of Ad</label>
    </div>
    <div class="col-md-1">
        <label class="form-label">Image</label>
    </div>
    <div class="col-md-1">
        <input type="radio" class="form-control adType" name="adType" value="image" required <?= ($adData['adType']=='image'?'CHECKED':'') ?> />
    </div>
    <div class="col-md-1">
        <label class="form-label">Video</label>
    </div>
    <div class="col-md-1">
        <input type="radio" class="form-control adType" name="adType" value="video" required <?= ($adData['adType']=='video'?'CHECKED':'') ?> />
    </div>
    <div class="clearfix"></div>
</div>
<div class="imagediv" style="display:<?= ($adData['adType']=='image'?'block':'none') ?>">
    <div class="form-group" >

        <div class="col-md-3">
        <label class="form-label">Upload Image</label>
        </div>
        <div class="col-md-4">
            <div class="imageupload panel-default">                        
                <div class="file-tab">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <!-- <input type="file" name="image-file[]" multiple> -->
                        <input type="file" name="image-file" />
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
            	<?php if(isset($adData['adFile']) && $adData['adFile'] != ''){ ?> <img style="width: 50%;height: 50%;" src="<?= base_url()."uploads/Ads_images/".$adData['adFile'] ?>" > <?php } ?> 
                <div class="url-tab panel-body">
                    <div class="input-group">
                        <input type="text" class="form-control hasclear" placeholder="Image URL">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default">Remove</button>
                    <!-- The URL is stored here. -->
                    <input type="hidden" name="image-url">
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <label class="form-label">Ads Duration</label>
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" name="adDuration"  onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= $adData['adDuration'] ?>" />
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <label class="form-label">Ad Category</label>
        </div>
        <div class="col-md-4">
            <select id="adCategory" style="width:100%" name="adCategory" >
                <option value="">SELECT AD CATEGORY</option>
                <option value="isRight" <?= ($adData['devices_id']=='isRight'?'SELECTED':'') ?>>isRight</option>
                <option value="isLeft" <?= ($adData['devices_id']=='isLeft'?'SELECTED':'') ?>>isLeft</option>
                <option value="isTop" <?= ($adData['devices_id']=='isTop'?'SELECTED':'') ?>>isTop</option>
                <option value="isBottom" <?= ($adData['devices_id']=='isBottom'?'SELECTED':'') ?>>isBottom</option>
                <option value="isLshape" <?= ($adData['devices_id']=='isLshape'?'SELECTED':'') ?>>isLshape</option>
                <option value="isFifty" <?= ($adData['devices_id']=='isFifty'?'SELECTED':'') ?>>50*50</option>
                <option value="isTwentyFive" <?= ($adData['devices_id']=='isTwentyFive'?'SELECTED':'') ?>>25*4</option>
            </select>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group" style="display:none">
        <div class="col-md-3">
            <label class="form-label">Image Display Duration</label>
        </div>
        <div class="col-md-4">
         <input type="text" class="form-control" placeholder="" name="imageDisplayDuration"  onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= $adData['imageDisplayDuration'] ?>" />
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group" style="display:none">
        <div class="col-md-3">
            <label class="form-label">Image Display Duration Split</label>
        </div>
        <div class="col-md-1">
            <input type="checkbox" class="form-control" placeholder="" name="imageDisplayDurationsplit"  value="true" <?= ($adData['imageDisplayDurationsplit']=='true'?'CHECKED':'') ?> />
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            <label class="form-label">Is Live Enabled</label>
        </div>
        <div class="col-md-1">
            <input type="checkbox" class="form-control" placeholder="" name="isLiveEnabled" disabled value="true" <?= ($adData['isLiveEnabled']=='true'?'CHECKED':'') ?> />
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="form-group videodiv" style="display:<?= ($adData['adType']=='video'?'block':'none') ?>">
    <div class="col-md-3">
        <label class="form-label">Upload Video </label>
    </div>
    <div class="col-md-4">
        <label class="btn btn-default btn-file">
            Browse <input type="file" style="display: none;" name="sample_video" />
        </label>
    </div>
    <div class="clearfix"></div>
    <?php if(isset($adData['adFile']) && $adData['adFile'] != ''){ ?>
    <video  width="360" height="230" class="img-responsive image-fixed" controls style="margin-left: 26%;padding: 5px 2px;">
       <source src="<?= base_url("uploads/Ads_videos/".$adData['adFile']) ?>#t=0.5" type="video/MP4">
    </video>
    <?php } ?>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Ads Location</label>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="add_locations"  readonly value="<?= $adData['add_locations'] ?>" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
     <div class="col-md-3">
        <label class="form-label">Enable Start & End Date</label>
    </div>
    <div class="col-md-1">
        <input type="checkbox" class="form-control isEnableStartEndDate" name="isEnableStartEndDate" value="yes" <?= ($adData['isEnableStartEndDate'] == 'yes' ? 'checked' : '')?> />
    </div>    
    <div class="clearfix"></div>
</div>
<div id="adStartEnd" style="display:<?= ($adData['isEnableStartEndDate'] == 'yes' ? 'block' : 'none')?>">
    <div class="form-group">
        <div class="col-md-3"><label class="form-label">Ad Start Date</label></div>
        <div class="col-md-4"><input type="text" class="form-control datepicker" name="start_date" required placeholder="" value="<?= ($adData['start_date'] != '0000-00-00 00:00:00'?date('d-m-Y H:i:s',strtotime($adData['start_date'])):'') ?>" autocomplete="off" /></div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <div class="col-md-3"><label class="form-label">Ad End Date</label></div>
        <div class="col-md-4"><input type="text" class="form-control datepicker" name="end_date" required placeholder="" value="<?= ($adData['end_date'] != '0000-00-00 00:00:00'?date('d-m-Y H:i:s',strtotime($adData['end_date'])):'') ?>" autocomplete="off" /></div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">First Name</label>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="fname" required value="<?= @$adData['fname'] ?>" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Last Name</label>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="lname" required value="<?= @$adData['lname'] ?>" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Email</label>
    </div>
     <div class="col-md-4">    
       <input type="email" name="email" class="form-control" required value="<?= @$adData['email'] ?>" />
      </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Mobile</label>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="mobile" required onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= @$adData['mobile'] ?>" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">User Name</label>
    </div>
    <div class="col-md-4">
        <input type="text" class="form-control" name="username" required value="<?= @$adData['username'] ?>" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Password</label>
    </div>
    <div class="col-md-4">
        <input type="password" class="form-control" name="password" />
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-group">
    <div class="col-md-3">
        <label class="form-label">Ad Status</label>
    </div>
    <div class="col-md-4">
        <select id="status" style="width:100%" name="status" >
            <option value="">SELECT AD STATUS</option>
            <option value="2" <?= ($adData['status']==2?'SELECTED':'') ?>>Active</option>
            <option value="3" <?= ($adData['status']==3?'SELECTED':'') ?>>In-active</option>
        </select>
    </div>
    <div class="clearfix"></div>
</div>
<div class="form-actions">
    <div class="col-md-3">
    </div>
    <div class="col-md-4">
        <input type="hidden" name="id" value="<?= @$adData['id'] ?>" />
        <input type="hidden" name="user_id" value="<?= @$adData['user_id'] ?>" />
        <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Submit</button>
    </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
$('.testSelAll1').SumoSelect({selectAll:true });
$(document).on("click",".adType",function(){
    var adType = $(this).val();
    if(adType == 'image'){
        $(".imagediv").show();
        $(".videodiv").hide();
    }else if(adType == 'video'){
        $(".imagediv").hide();
        $(".videodiv").show();
    }else{
        $(".imagediv").hide();
        $(".videodiv").hide();
    }
});
$(document).on("change","#adCategory",function(){
    var adcategory = $(this).val();
    if(adcategory != ''){
        $("input[name=isLiveEnabled]").prop('checked',false);
    }else{
        $("input[name=isLiveEnabled]").prop("checked", true);
    }
});
$(document).on("click",".isEnableStartEndDate",function(){
    if($(".isEnableStartEndDate").is(":checked")){
        $("#adStartEnd").show();
        $("input[name=start_date]").attr('required',true);
        $("input[name=end_date]").attr('required',true);
    }else{
        $("#adStartEnd").hide();
        $("input[name=start_date]").removeAttr('required',true);
        $("input[name=end_date]").removeAttr('required',true);
    }
    
});
$(document).on("change","#adDevice",function(){ 
    var device_id = $(this).val();
    $.ajax({
        type : 'POST',
        url  : "<?= base_url("admin/getDeviceDataByDeviceId") ?>",
        data : {"device_id":device_id},
        dataType : 'JSON',
        crossDomain: true,
        success : function(response){
            if(response.success == 1){
                $("input[name=add_locations]").val(response.device.device_location);
            }else{
                $("input[name=add_locations]").val('');
            }
        }
    });

});
$(".username").blur(function(){
	var userName = $(this).val();
	//if(userName != ''){
		$.ajax({
			type : 'POST',
			url  : "<?= base_url('admin/getUserDataByUserName') ?>",
			data : {"username":userName},
			dataType : 'JSON',
			crossDomain: true,
			success : function(response){
				if(response.success == 1){
					$("input[name=fname]").val(response.user.fname);
					$("input[name=lname]").val(response.user.lname);
					$("input[name=email]").val(response.user.email);
					$("input[name=mobile]").val(response.user.mobile);
					$("input[name=password]").removeAttr('required',true);
					$("input[name=fname]").attr('readonly',true);
					$("input[name=lname]").attr('readonly',true);
					$("input[name=email]").attr('readonly',true);
					$("input[name=mobile]").attr('readonly',true);
					$("input[name=password]").attr('readonly',true);
					
				}else{
					$("input[name=fname]").val('');
					$("input[name=lname]").val('');
					$("input[name=email]").val('');
					$("input[name=mobile]").val('');
					$("input[name=password]").attr('required',true);
					$("input[name=fname]").removeAttr('readonly',true);
					$("input[name=lname]").removeAttr('readonly',true);
					$("input[name=email]").removeAttr('readonly',true);
					$("input[name=mobile]").removeAttr('readonly',true);
					$("input[name=password]").removeAttr('readonly',true);
				}
			}
		});
	//}
});
/*var $imageupload = $('.imageupload');
$imageupload.imageupload();*/
</script>
</body>
</html>