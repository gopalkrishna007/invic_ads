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
            <li><a href="<?= base_url('admin/addtrainersubcategory') ?>" class="active">Trainer Category</a> </li>
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
							<form action="<?= base_url("admin/savetrainersubcategory") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data"> 
                                <div class="form-group">
									<div class="col-md-3">
										<label class="form-label">Trainer Category</label>
									</div>
									<div class="col-md-4">
										
                                        <select class="form-control" name="trainer_categories_id">
                                            <option value="">Select</option>
                                            <?php
                                                        if(!empty($tutorcategories))
                                                        {
                                                            foreach ($tutorcategories as $cat_info) {
                                                                ?>
                                                                 <option value="<?=$cat_info['id']?>"<?= @($trainersubcategory['trainer_categories_id']==$cat_info['id'])?"selected":"" ?>><?=$cat_info['trainer_category_name']?></option> 
                                                        <?php   }
                                                        }
                                                        ?>
                                        </select>
									</div>
									<div class="clearfix"></div>
								</div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label class="form-label">Trainer Sub Category</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="trainer_sub_category_name" required  value="<?= @$trainersubcategory['trainer_sub_category_name'] ?>"/>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                                <div class="form-actions">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-4">
									   <input type="hidden" name="id" value="<?= @$trainersubcategory['id'] ?>" />
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


