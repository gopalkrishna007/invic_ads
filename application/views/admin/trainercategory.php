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
            <li><a href="<?= base_url('admin/addtutorcategory') ?>" class="active">Trainer Category</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Trainer <span class="semi-bold">Category</span> </h3>
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
							<form action="<?= base_url("admin/savetrainercategory") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data"> 
                                <div class="form-group">
									<div class="col-md-3">
										<label class="form-label">Trainer Category</label>
									</div>
									<div class="col-md-4">
										<input type="text" class="form-control" name="trainer_category_name" required value="<?= @$trainerData['trainer_category_name'] ?>"  />
									</div>
									<div class="clearfix"></div>
								</div>
                                <div class="form-group">
									<div class="col-md-3">
									<label class="form-label">Sample Image (upload)</label>
									</div>
									<div class="col-md-4">
									 <div class="imageupload panel-default">
													
													<div class="file-tab">
														<label class="btn btn-default btn-file">
															<span>Browse</span>
															<!-- The file is stored here. -->
															<input type="file" name="image-file">
														</label>
														<button type="button" class="btn btn-default" style="display: none;">Remove</button>
													</div>
													 <?php if(isset($trainerData['trainer_category_images']) && $trainerData['trainer_category_images'] != ''){ ?> <img style="width: 50%;height: 50%;" src="<?= base_url()."uploads/trainer_category_images/".$trainerData['trainer_category_images'] ?>" > <?php } ?> 
													<div class="url-tab panel-body" style="display: none;">
														<div class="input-group">
															<input type="text" class="form-control hasclear" placeholder="Image URL">
															<div class="input-group-btn">
																<button type="button" class="btn btn-default">Submit</button>
															</div>
														</div>
														<button type="button" class="btn btn-default" style="display: none;">Remove</button>
														<!-- The URL is stored here. -->
														<input type="hidden" name="image-url" value="">
													</div>
												</div>
									</div>
								<div class="clearfix"></div>
								</div>
                                <div class="form-actions">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-4">
									  <input type="hidden" name="id" value="<?= @$trainerData['id'] ?>" />
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


