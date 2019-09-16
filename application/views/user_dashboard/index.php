<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<meta charset="utf-8"/>
<title>Ads Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta content name="description"/>
<meta content name="author"/>
<script src="/cdn-cgi/apps/head/vAzQ3pO_LVF9Y_-CSxLP87NslSA.js"></script>
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?= base_url().'assets/admin/' ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url().'assets/admin/' ?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?= base_url().'assets/admin/' ?>css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url().'assets/admin/' ?>css/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url().'assets/admin/' ?>css/webarch.css" rel="stylesheet" type="text/css"/>
</head>
<body class="error-body no-top">
<div class="container">

<div class="row login-container column-seperation">
<div><?php echo $this->session->flashdata('message');?></div>
<div class="col-md-5 col-md-offset-1">

<h2>
Sign in
</h2>
<!--<p>
Use Facebook, Twitter or your email to sign in.<br>
<a href="#">Sign up Now!</a> for a webarch account,It's free and always will be..
</p><br>
<button class="btn btn-block btn-info col-md-8" type="button"><span class="pull-left icon-facebook" style="font-style: italic"></span> <span class="bold">Login with Facebook</span></button> <button class="btn btn-block btn-success col-md-8" type="button"><span class="pull-left icon-twitter" style="font-style: italic"></span>
<span class="bold">Login with Twitter</span></button>-->
</div>
<div class="col-md-5">
<br>
<?= validation_errors(); ?>
<form action="<?= base_url("user_dashboard/logincheck") ?>" class="login-form validate" id="login-form" method="post" name="login-form">
<div class="row">
<div class="form-group col-md-10">
<label class="form-label">Username</label>
<input class="form-control" id="txtusername" name="username" type="text" required>
<?= form_error('username') ?>
</div>
</div>
<div class="row">
<div class="form-group col-md-10">
<label class="form-label">Password</label> <span class="help"></span>
<input class="form-control" id="txtpassword" name="password" type="password" required>
<?= form_error('password') ?>
</div>
</div>
<div class="row">
<div class="control-group col-md-10">
<div class="checkbox checkbox check-success">
<a href="#">Trouble login in?</a>&nbsp;&nbsp; <input id="checkbox1" type="checkbox" value="1"> <label for="checkbox1">Keep me reminded</label>
</div>
</div>
</div>
<div class="row">
<div class="col-md-10">
<button class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
</div>
</div>
</form>
</div>
</div>
</div>
<script src="<?= base_url().'assets/admin/' ?>js/pace.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/jqueryblockui.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/jquery.unveil.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/select2.min.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/webarch.js" type="text/javascript"></script>
<script src="<?= base_url().'assets/admin/' ?>js/chat.js" type="text/javascript"></script>
</body>
</html>