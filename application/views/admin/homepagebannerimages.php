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
    .note-btn {
        padding: 7px 10px !important;
    }
	.removei{
		float: right;
		margin-top: -188px;
		overflow: -webkit-paged-x;
		color: red;
		font-size: 20px;
		margin-right: -5px;
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
            <li><a href="<?= base_url('admin/addtutorcategory') ?>" class="active">Tutor Category</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Tutor <span class="semi-bold">Category</span> </h3>
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
							<form action="<?= base_url("admin/savebannerimages") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data"> 
                               
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="form-label">Image (upload)</label>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel-default">
                                            <div class="file-tab">
                                                <label class="btn btn-default ">
													
													<!-- The file is stored here. -->
													<input type="file" name="image-file[]" required multiple />
												</label>
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-actions">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-4">
									  
                                        <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Submit</button>
                                    </div>
                                </div>
								</form>
                            </div>
                        </div>
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 30px 10px;">
								<?php
									if(!empty($bannerImages)){ foreach($bannerImages as $image){ ?>
										<div class="col-md-4" style="padding: 10px 10px;">
										   <img src="<?= base_url("uploads/banner_images/".$image['banner_image'])?>" style="width: 100%;height: 180px;" /><i class="fa fa-times removei" data="<?= $image['id'] ?>" aria-hidden="true"></i>
										</div>								
									<?php } } ?>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).on("click",".removei",function(){
	var conf = confirm("Do You want delete this image..?");
	if(conf == true){
		var id= $(this).attr("data");
		var ss= $(this);
		$.ajax({
			type: "POST",
			url: '<?= base_url("admin/deletebannerimage") ?>',
			data: {
				"id": id
			},
			dataType: "json",
			success: function(data) {
				if (data.success == 1) {
					ss.parent().remove();
				} else {
					alert(data.message);
				}
			}
		});
		
	}
});
</script>

