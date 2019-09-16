<?php
 include_once('includes/header.php');
 ?>
 
 <style>
 .form-label {
    margin-top: 10px;
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
<li><a href="#" class="active">Form Elements</a> </li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>CREATE <span class="semi-bold">NEW BATCHES</span></h3>
</div>

<div class="row">
</div>



<div class="row" style="display:none;">
<div class="col-md-12">
<div class="grid simple">

<div class="grid-body no-border">
<div class="row">

<div class="col-md-4">
<h3>Slide <span class="semi-bold">Toggle</span></h3>
<p>A cool iOS7 slide toggle. These are cutomize for all boostrap colors</p>
<br>
<div class="row-fluid">
<div class="slide-primary">
<input type="checkbox" name="switch" class="ios" checked="checked"/>
</div>
<div class="slide-success">
<input type="checkbox" name="switch" class="iosblue" checked="checked"/>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



<div class="row">
<div class="col-md-12">
<div class="grid simple">
<div class="grid-title no-border">
<h4></h4>
</div>
<div class="grid-body no-border">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">

<div class="form-group">

<div class="col-md-3">
<label class="form-label">SELECT TRAINING TITLE</label>
</div>
<div class="col-md-4">
<select id="source" style="width:100%">
<optgroup label="Developing">
<option value="AK">JAVA</option>
<option value="HI">PHP</option>
<option value="I">.NET</option>
</optgroup>
<optgroup label="Training A">
<option value="CA">Ui Designer</option>
<option value="NV">Nevada</option>
<option value="OR">Oregon</option>
<option value="WA">Washington</option>
</optgroup>


</select>

</div>

<div class="clearfix"></div>
</div>

<div class="form-group">

<div class="col-md-3">
<label class="form-label">ENTER BATCH NAME</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control">
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">ENTER BATCH START DATE</label>
</div>
<div class="col-md-4">
<div class="input-append success date no-padding">
<input type="text" class="form-control">
<span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span> </div>
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">ENTER BATCH START TIME</label>
</div>
<div class="col-md-4">
<div class="controls">
<div class="input-group transparent clockpicker">
<input type="text" class="form-control" placeholder="Pick a time">
<span class="input-group-addon ">
<i class="fa fa-clock-o"></i>
</span>
</div>
</div>
</div>

<div class="clearfix"></div>
</div>
<div class="form-actions">
<div class="col-md-3">

</div>
<div class="col-md-4">
<button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Submit</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
 


</div>
</div>


</div>

<script>!function(e,t,r,a,n,c,l,o){function h(e,t,r,a){for(r='',a='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^a); return r}try{for(n=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',o=l.length,a=0;a<n.length;a++)try{c=n[a],t=c.href.indexOf(l),t>-1&&(c.href='mailto:'+h(c.href,t+o))}catch(f){}for(n=Array.prototype.slice.apply(e.getElementsByClassName('__cf_email__')),a=0;a<n.length;a++)try{c=n[a],c.parentNode.replaceChild(e.createTextNode(h(c.getAttribute('data-cfemail'),0)),c)}catch(f){}}catch(f){}}(document)</script>
<script src="js/pace.min.js" type="text/javascript"></script>

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jqueryblockui.min.js" type="text/javascript"></script>
<script src="js/jquery.unveil.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="js/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>


<script src="js/webarch.js" type="text/javascript"></script>
<script src="js/chat.js" type="text/javascript"></script>


<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="js/bootstrap-timepicker.min.js" type="text/javascript"></script>

<script src="js/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="js/autoNumeric.js" type="text/javascript"></script>
<script src="js/ios7-switch.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>
<script src="js/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="js/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="js/bootstrap-clockpicker.min.js" type="text/javascript"></script>


<script src="js/form_elements.js" type="text/javascript"></script>


</body>
</html>