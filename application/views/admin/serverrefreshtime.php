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
            <li><a href="<?= base_url("admin/serverrefreshtime") ?>" class="active">add Administration Properties</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Add <span class="semi-bold">Properties</span> </h3>
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
							<form action="<?= base_url("admin/saveserverrefreshtime") ?>" class="login-form validate" id="login-form" method="post" name="login-form">
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label"> Server Refresh Time</label></div>
                                    <div class="col-md-4"><input type="text" name="serverrefreshtime" class="form-control" required value="<?= @$propertiesData['serverrefreshtime'] ?>" onkeypress="return (event.charCode >=48 && event.charCode <=57)"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label class="form-label">Banner Right</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isRight"  value="true" <?= @($propertiesData['isRight']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Banner Left</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isLeft"  value="true" <?= @($propertiesData['isLeft']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Banner Top</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isTop"  value="true"  <?= @($propertiesData['isTop']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Banner Bottom</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isBottom"  value="true" <?= @($propertiesData['isBottom']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label class="form-label">Banner L-Shape</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isLshape"  value="true" <?= @($propertiesData['isLshape']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Banner 50*50</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isFifty"  value="true" <?= @($propertiesData['isFifty']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Banner 25*4</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input type="checkbox" class="form-control" placeholder="" name="isTwentyFive"  value="true" <?= @($propertiesData['isTwentyFive']=='true'?'CHECKED':'') ?> />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <input type="hidden" name="id" class="form-control"  value="<?= @$propertiesData['id'] ?>" >
                                <div class="form-actions">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4"><button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> <?= (empty($propertiesData['id'])?'Submit':'Update') ?></button></div>
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

