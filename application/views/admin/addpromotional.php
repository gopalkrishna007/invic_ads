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
            <li><a href="<?= base_url("admin/addpromotional") ?>" class="active">Offers</a> </li>
        </ul>
        <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Add <span class="semi-bold">Offers</span> </h3>
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
							<form action="<?=base_url("admin/insertpromotional")?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data">	  <div class="form-group">
							    <div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Category</label></div>
                                    <div class="col-md-4">
									 <select class="bootstrap-select" name="category" style="width: 100%;" required>
									    <option value="" >Select Category</option>
										<option value="1" <?=@($offer_info['category']==1)?"selected":""?>>Trainer Booking</option>
										<option value="2" <?=@($offer_info['category']==2)?"selected":""?>>Membership Fee</option>	
										<option value="3" <?=@($offer_info['category']==2)?"selected":""?>>Pay Fee</option>									
									 </select>
									 </div>
                                    <div class="clearfix"></div>
                                </div>
                                    <div class="col-md-3"><label class="form-label">Start Date</label></div>
                                    <div class="col-md-4"><input type="text" class="form-control datepicker" value="<?=@(!empty($offer_info))?date("d-m-Y",strtotime($offer_info['start_date'])):""?>" name="start_date"  placeholder="Start Date" required /></div>
                                    <div class="clearfix"></div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-3"><label class="form-label">End Date</label></div>
                                    <div class="col-md-4"><input type="text" class="form-control datepicker" value="<?=@(!empty($offer_info))?date("d-m-Y",strtotime($offer_info['end_date'])):""?>" name="end_date" placeholder="End Date" required /></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Coupon Code</label></div>
                                    <div class="col-md-4">
									<input class="form-control" value="<?=@$offer_info['coupon_code']?>" name="coupon_code" placeholder="Coupon Code" type="text" required /></div>
                                    <div class="clearfix"></div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Discount Type</label></div>
                                    <div class="col-md-4">
									 <select class="bootstrap-select" name="discount_type" style="width: 100%;" required>
									    <option value="" >Select Discount Type</option>
										<option value="1" <?=@($offer_info['discount_type']==1)?"selected":""?>>Amount</option>
										<option value="2" <?=@($offer_info['discount_type']==2)?"selected":""?>>Percentage</option>										
									 </select>
									 </div>
                                    <div class="clearfix"></div>
                                </div>
                               <div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Amount/Discount</label></div>
                                    <div class="col-md-4"><input class="form-control" name="discount" value="<?=@$offer_info['discount']?>" onkeypress="return isNumberKey(event);" placeholder="Discount% or Amount" type="text"></div>
                                    <div class="clearfix"></div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Min purchase amount</label></div>
                                    <div class="col-md-4"><input class="form-control" name="min_purchase_amount" value="<?=@$offer_info['min_purchase_amount']?>" onkeypress="return isNumberKey(event);" placeholder="Amount" type="text" /></div>
                                    <div class="clearfix"></div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Max Discount amount</label></div>
                                    <div class="col-md-4"><input class="form-control numeric" onkeypress="return isNumberKey(event);" value="<?=@$offer_info['max_cashback_amount']?>" name="max_cashback_amount" placeholder="Amount" type="text" /></div>
                                    <div class="clearfix"></div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Select coupon</label></div>
                                    <div class="col-md-4"><select class="bootstrap-select" name="offer_type" style="width: 100%;">
										<option value="1" <?=@($offer_info['offer_type']==1)?"selected":""?>>Online</option>
										<option value="2" <?=@($offer_info['offer_type']==2)?"selected":""?>>Offline</option>
										
									 </select></div>
                                    <div class="clearfix"></div>
                                </div>
								<div class="form-group">
                                    <div class="col-md-3"><label class="form-label">Description</label></div>
                                    <div class="col-md-4"><textarea class="form-control" name="description"><?=@$offer_info['description']?></textarea></div>
                                    <div class="clearfix"></div>
                                </div>
								
                                <input type="hidden" name="id" value="<?=@$offer_info['id']?>" class="form-control"  />
                                <div class="form-actions">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-4"><button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Submit</button></div>
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
