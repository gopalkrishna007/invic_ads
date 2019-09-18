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
            <li><a href="<?= base_url('admin/adddevice') ?>" class="active">Add Device</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Device <span class="semi-bold">Data Creation</span> </h3>
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
							<form action="<?= base_url("admin/savedevice") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data">
								<div class="form-group">
									<div class="col-md-3">
										<label class="form-label">Franchise</label>
									</div>
									<div class="col-md-4">
										<select id="franchise_id" style="width:100%" name="franchise_id" required>
											<option value="">SELECT FRANCHISE</option>
											<?php foreach($franchiseData as $frData){ ?>
											<option value="<?= $frData['id'] ?>" <?= @($device['franchise_id'] == $frData['id'] ? 'SELECTED' : '') ?>><?= ucwords($frData['franchisename']) ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="clearfix"></div>
								</div>
                                <div class="form-group">
									<div class="col-md-3">
										<label class="form-label">Device Id's</label>
									</div>
									<div class="col-md-4">
										<select id="adType" style="width:100%" name="devices_id" required>
											<option value="">SELECT DEVICE ID</option>
											<?php foreach($deviceData as $ddata){ if($ddata['device_name'] == ''){ ?>
											<option value="<?= $ddata['id'] ?>" <?= @($device['id'] == $ddata['id'] ? 'SELECTED' : '' ) ?>><?= $ddata['device_id'] ?></option>
											<?php } } ?>
										</select>
									</div>
									<div class="clearfix"></div>
								</div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="form-label">Device Name</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="device_name" required  value="<?= @$device['device_name'] ?>"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="form-label">Device Location</label>
                                    </div>
                                    <div class="col-md-4">
										<input type="text" class="form-control" name="device_location" required  value="<?= @$device['device_location'] ?>"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
								<?php if(!empty($this->uri->segment(3))){ ?>
								<div class="form-group">
									<div class="col-md-3">
										<label class="form-label">Device Status</label>
									</div>
									<div class="col-md-4">
										<select id="status" style="width:100%" name="status" required>
											<option value="">SELECT STATUS</option>
											<option value="active" <?= @($device['status'] == 'active'?'SELECTED':'') ?>>Active</option>
											<option value="inactive" <?= @($device['status'] == 'inactive'?'SELECTED':'') ?>>In-Active</option>
										</select>
									</div>
									<div class="clearfix"></div>
								</div>
								<?php } ?>
                                <div class="form-actions">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-4">
									   <input type="hidden" name="id" value="<?= @$device['id'] ?>" />
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


