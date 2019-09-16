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
<li><a href="#" class="active">Add Admin Users</a> </li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>Create <span class="semi-bold">Admin</span> User </h3>
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
<form action="<?= base_url("admin/saveadminuser") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data">
<div class="form-group">

<div class="col-md-3">
<label class="form-label">First Name</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="fname" required value="<?= @$trainerdata['fname'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Last Name</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="lname" required value="<?= @$trainerdata['lname'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Email</label>
</div>
 <div class="col-md-4">
    
   <input type="email" name="email" class="form-control" required value="<?= @$trainerdata['email'] ?>" />
  </div>
<div class="clearfix"></div>
</div>

<div class="form-group">

<div class="col-md-3">
<label class="form-label">Mobile</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="mobile" required onkeypress="return (event.charCode >=48 && event.charCode <=57)" value="<?= @$trainerdata['mobile'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">User Name</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="username" required value="<?= @$trainerdata['username'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Password</label>
</div>
<div class="col-md-4">
<input type="password" class="form-control" name="password" <?= (empty($this->uri->segment(3))?'required':'') ?>  />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Address</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="address" required value="<?= @$trainerdata['address'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">City</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="city" required value="<?= @$trainerdata['city'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">State</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="state" required value="<?= @$trainerdata['state'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Zip</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="zip" required value="<?= @$trainerdata['zip'] ?>" onkeypress="return (event.charCode >=48 && event.charCode <=57)" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Country</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="country" required value="<?= @$trainerdata['country'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-actions">
<div class="col-md-3">

</div>
<div class="col-md-4">
<input type="hidden" name="id" value="<?= @$trainerdata['id'] ?>" />
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