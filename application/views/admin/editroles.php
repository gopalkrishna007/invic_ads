<div class="page-content">
    <div id="portlet-config" class="modal hide">
        <div class="modal-header"><button data-dismiss="modal" class="close" type="button"></button>
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
			<li><a href="javascript:void(0)">Roles</a> </li>
            <li><a href="<?= base_url("admin/editroles/".$this->uri->segment(3)) ?>" class="active">Edit Roles</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Edit <span class="semi-bold">Roles</span> </h3>
        </div>
        <div class="row">
            <div class="col-md-12">
			<div><?php echo $this->session->flashdata('message'); echo validation_errors(); ?> </div>
                <div class="grid simple">
                    <div class="grid-title no-border">
                        <h4></h4>
                    </div>
                    <div class="grid-body no-border"> <br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
								<form action="<?= base_url("admin/updateroles") ?>" class="login-form validate" id="login-form" method="post" name="login-form">
									
									<div class="form-group">
										<div class="col-md-3"><label class="form-label"> Role Name</label></div>
										<div class="col-md-4"><input type="text" name="roll_name" class="form-control" required value="<?= @$selectedModulePages['role_name'] ?>" ></div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<div class="col-md-3">Select Modules</div>
										<div class="col-md-4">
											<?php if(!empty($modules)){ foreach($modules as $key => $mainmodule){ ?>
											<ul>                    
												<li> 
													<span>
														<input type="checkbox" name="modules_id[]" value="<?= $mainmodule['id'] ?>" <?= (in_array($mainmodule['id'],$modIDS)?'CHECKED':'') ?> />
														<?= ucwords($mainmodule['module_name']) ?>
													</span>
													<ul class="sub-menu">
														<?php foreach($modulePages[$mainmodule['id']] as $key => $submodule){ ?>
														<li>
															<span>
																<input type="checkbox" name="modules_page_id[<?= $mainmodule['id'] ?>][]" value="<?= $submodule['id'] ?>" <?= (in_array($submodule['id'],$modPageIDS)?'CHECKED':'') ?> />
																<?= ucwords($submodule['page_name']) ?>
															</span>
														</li>
														<?php } ?>
													</ul>
												</li>
												
											</ul>
											<?php } } ?>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="form-group">
										<div class="col-md-3">
											<label class="form-label">Status</label>
										</div>
										<div class="col-md-4">
											<select id="status" style="width:100%" name="status" >
												<option value="">SELECT STATUS</option>
												<option value="1" <?= ($selectedModulePages['status']==1?'SELECTED':'') ?>>Pending</option>
												<option value="2" <?= ($selectedModulePages['status']==2?'SELECTED':'') ?>>Active</option>
												<option value="3" <?= ($selectedModulePages['status']==3?'SELECTED':'') ?>>In-active</option>
											</select>
										</div>
										<div class="clearfix"></div>
									</div>
									<input type="hidden" name="module_id" value="<?= $selectedModulePages['id'] ?>" />
									<div class="form-actions">
										<div class="col-md-3"></div>
										<div class="col-md-4">
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