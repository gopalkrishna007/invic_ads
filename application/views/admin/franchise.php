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
    
    .note-btn {
        padding: 7px 10px !important;
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
            <li><a href="javascript:void(0)" class="active">Franchise Info</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Create <span class="semi-bold">Franchise</span> </h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="grid simple">
                    <div class="grid-title no-border">
                        <h4></h4>
                    </div>
                    <div>
                        <?php echo $this->session->flashdata('message'); echo validation_errors(); ?>
                    </div>
                    <div class="grid-body no-border">
                        <br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <form action="<?= base_url("admin/savefranchise") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Franchise Name</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="franchisename" required value="<?= @$franchisedata['franchisename'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Franchise Location</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="franchiselocation"  value="<?= @$franchisedata['franchiselocation'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">IP Address</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="ipaddress"  value="<?= @$franchisedata['ipaddress'] ?>" required />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="form-label">Services</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control testSelAll1" name="services_id[]" placeholder="SELECT SERVICE NAME" multiple="multiple" required> 
                                                <?php foreach($serviceData as $ddata){ ?>
                                                <option value="<?= $ddata['id'] ?>" <?= @(in_array($ddata['id'],$serviceIds)?'SELECTED':'') ?>><?= $ddata['servicename'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>    
                                    </div>
									<div class="form-group">
                                        <div class="col-md-3">
                                            <label class="form-label">Role</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="form-control" name="role_id" required> 
												<option value="">SELECT ROLE</option>
                                                <?php foreach($rolesData as $rdata){ ?>
                                                <option value="<?= $rdata['id'] ?>" <?= @($franchisedata['module_role_id'] == $rdata['id'] ? 'SELECTED' : '') ?>><?= $rdata['role_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="form-label">First Name</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="fname" required value="<?= @$franchisedata['fname'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Last Name</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="lname"  value="<?= @$franchisedata['lname'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Email</label>
                                        </div>
                                        <div class="col-md-4">

                                            <input type="email" name="email" class="form-control"  value="<?= @$franchisedata['email'] ?>" />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Mobile</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="mobile" required onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= @$franchisedata['mobile'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">User Name</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="username" required value="<?= @$franchisedata['username'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Password</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="password" <?=( empty($this->uri->segment(3))?'required':'') ?> />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Address</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="address"  value="<?= @$franchisedata['address'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">City</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="city"  value="<?= @$franchisedata['city'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">State</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="state"  value="<?= @$franchisedata['state'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Zip</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="zip"  value="<?= @$franchisedata['zip'] ?>" onkeypress="return (event.charCode >=48 && event.charCode <=57)" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Country</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="country"  value="<?= @$franchisedata['country'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Status</label>
                                        </div>
                                        <div class="col-md-4">
                                             <select id="status" style="width:100%" name="status" required>
                                                <option value="">Select Status</option>
                                                <option value="2" <?= @($franchisedata['status'] == 2 ? 'SELECTED' : '') ?>>Active</option>
                                                <option value="3" <?= @($franchisedata['status'] == 3 ? 'SELECTED' : '') ?>>In-Actice</option>
                                            </select>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group" >
                                        <div class="col-md-3">
                                        <label class="form-label">Upload Image</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="imageupload panel-default">                        
                                                <div class="file-tab">
                                                    <label class="btn btn-default btn-file">
                                                        <span>Browse</span>
                                                        <input type="file" name="logo" />
                                                    </label>
                                                    <button type="button" class="btn btn-default">Remove</button>
                                                </div>
                                                <?php if(isset($franchisedata['logo']) && $franchisedata['logo'] != ''){ ?> <img style="width: 50%;height: 50%;" src="<?= base_url()."uploads/franchise_images/".$franchisedata['logo'] ?>" > <?php } ?> 
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
                                    <input type="hidden" value="<?= @$franchisedata['logo'] ?>" name="logoimage" />
                                    <div class="form-actions">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-4">
                                            <input type="hidden" name="id" value="<?= @$franchisedata['id'] ?>" />
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
</script>