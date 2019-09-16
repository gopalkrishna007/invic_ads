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
            <li><a href="#" class="active">Add Service</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Create <span class="semi-bold">Service</span>  </h3>
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
                                <form action="<?= base_url("admin/saveservice") ?>" class="login-form validate" id="login-form" method="post" name="login-form" >
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Service Name</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="servicename" required value="<?= @$servicedata['servicename'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Price</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="price" required onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= @$servicedata['price'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="form-label">Unit Type</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="unittype" style="width:100%" name="unittype" required>
                                                <option value="">Select Unit Type</option>
                                                <option value="1" <?= @($servicedata['unittype'] == 1 ? 'SELECTED' : '') ?>>Days</option>
                                                <option value="2" <?= @($servicedata['unittype'] == 2 ? 'SELECTED' : '') ?>>Months</option>
                                            </select>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Days/Months</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="unit" required onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= @$servicedata['unit'] ?>" />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Enable Tax</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="checkbox" class="" name="enabletax" value="1" <?= @($servicedata['enabletax'] == 1?'CHECKED':'') ?> />
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Tax Type</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="taxtype" style="width:100%" name="taxtype" >
                                                <option value="">Select Tax Type</option>
                                                <option value="1" <?= @($servicedata['taxtype'] == 1 ? 'SELECTED' : '') ?>>GST</option>
                                                <option value="2" <?= @($servicedata['taxtype'] == 2 ? 'SELECTED' : '') ?>>IGST</option>
                                            </select>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-group">

                                        <div class="col-md-3">
                                            <label class="form-label">Tax Mode</label>
                                        </div>
                                        <div class="col-md-4">
                                            <select id="taxmode" style="width:100%" name="taxmode" required>
                                                <option value="">Select Tax taxmode</option>
                                                <option value="1" <?= @($servicedata['taxmode'] == 1 ? 'SELECTED' : '') ?>>Inclusive Tax</option>
                                                <option value="2" <?= @($servicedata['taxmode'] == 2 ? 'SELECTED' : '') ?>>Exclude Tax</option>
                                            </select>
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
                                                <option value="1" <?= @($servicedata['status'] == 1 ? 'SELECTED' : '') ?>>Active</option>
                                                <option value="2" <?= @($servicedata['status'] == 2 ? 'SELECTED' : '') ?>>In-Actice</option>
                                            </select>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>                            
                                    <div class="form-actions">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-4">
                                            <input type="hidden" name="id" value="<?= @$servicedata['id'] ?>" />
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