<?php
 include_once('includes/header.php');
 ?>
 
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
<li><a href="#" class="active">Form Elements</a> </li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>Create <span class="semi-bold">New</span>  Articles </h3>
</div>

<div class="row">
<div class="col-md-12">
<div class="grid simple">
<div class="grid-title no-border">
<h4></h4>
</div>
<div class="grid-body no-border"> <br>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="form-group">

<div class="col-md-3">
<label class="form-label"> Title</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control">
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label"> Category</label>
</div>
<div class="col-md-4">
<select id="source" style="width:100%">
<optgroup label="Developing">
<option value="AK">Java</option>
<option value="HI">PHP</option>
</optgroup>
<optgroup label="Training A">
<option value="CA">Training 1</option>
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
<label class="form-label">Description</label>
</div>
<div class="col-md-9">
 <div class="form-group">
    
    <textarea name="text" class="summernote" id="contents" title="Contents"></textarea>
  </div>
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Banner Image (upload)</label>
</div>
<div class="col-md-4">
 <div class="imageupload panel-default">
                
                <div class="file-tab">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file" name="image-file">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
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

<div class="form-group">

<div class="col-md-3">
<label class="form-label">Author</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control">
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

<div class="chat-window-wrapper">
<div id="main-chat-wrapper" class="inner-content">
<div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
<div class="chat-header">
<div class="pull-left">
<input type="text" placeholder="search">
</div>
<div class="pull-right">
<a href="#" class><div class="iconset top-settings-dark "></div> </a>
</div>
</div>
<div class="side-widget">
<div class="side-widget-title">group chats</div>
<div class="side-widget-content">
<div id="groups-list">
<ul class="groups">
<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
</ul>
</div>
</div>
</div>
<div class="side-widget fadeIn">
<div class="side-widget-title">favourites</div>
<div id="favourites-list">
<div class="side-widget-content">
<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
<span class="badge badge-important">3</span>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/c.jpg" alt data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="side-widget">
<div class="side-widget-title">more friends</div>
<div class="side-widget-content" id="friends-list">
<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/h.jpg" alt data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/c.jpg" alt data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/h.jpg" alt data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
<div class="chat-header">
<div class="pull-left">
<input type="text" placeholder="search">
</div>
<div class="pull-right">
<a href="#" class><div class="iconset top-settings-dark "></div> </a>
</div>
</div>
<div class="clearfix"></div>
<div class="chat-messages-header">
<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
</div>
<div class="chat-messages scrollbar-dynamic clearfix">
<div class="inner-scroll-content clearfix">
<div class="sent_time">Yesterday 11:25pm</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
Hello, You there?
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
How was the meeting?
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
Let me know when you free
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="sent_time ">Today 11:25pm</div>
<div class="user-details-wrapper pull-right">
<div class="user-details">
<div class="bubble sender">
Let me know when you free
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Sent On Tue, 2:45pm</div>
</div>
</div>
</div>
<div class="chat-input-wrapper" style="display:none">
<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>

</div>
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
<script src="js/bootstrap-imageupload.js" type="text/javascript"></script>

<script src="js/gulpfile.js" type="text/javascript"></script>

<script src="js/summernote.js" type="text/javascript"></script>

<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="js/bootstrap-timepicker.min.js" type="text/javascript"></script>

<script src="js/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="js/autoNumeric.js" type="text/javascript"></script>
<script src="js/ios7-switch.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>

<script src="js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="js/bootstrap-clockpicker.min.js" type="text/javascript"></script>

<script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

     
        </script>


 <script type="text/javascript">
    $(function() {
      $('.summernote').summernote({
        height: 200
      });

      $('form').on('submit', function (e) {
        e.preventDefault();
        alert($('.summernote').summernote('code'));
        alert($('.summernote').val());
      });
    });
  </script>

</body>
</html>