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
<li><a href="#" class="active">Online Training</a> </li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>Upload <span class="semi-bold">New</span> Lesson </h3>
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
<form action="<?= base_url("admin/saveonlinelesson") ?>" class="login-form validate" id="login-form" method="post" name="login-form" enctype="multipart/form-data">
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Select Online Training Course</label>
</div>
<div class="col-md-4">
<select id="source1" style="width:100%" name="virtual_trainer_id" required >
<option value="">Select Online Training Course</option>
<?php foreach($trainerdata as $tcat){ ?>
<option value="<?= $tcat['id'] ?>" <?= (@$lessondata['virtual_trainer_id']==$tcat['id']?'SELECTED':'') ?>><?= ucwords($tcat['title']) ?></option>
<?php } ?>


</select>

</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Lesson Title</label>
</div>
<div class="col-md-4">
<input type="text" class="form-control" name="title" required value="<?= @$lessondata['lesson_title'] ?>" />
</div>

<div class="clearfix"></div>
</div>
<div class="form-group">

<div class="col-md-3">
<label class="form-label">Sample Image (upload)</label>
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
				<div class="clearfix"></div>
				<?php if(isset($lessondata['lesson_image']) && $lessondata['lesson_image'] != ''){ ?> <img style="width: 50%;height: 50%;" src="<?= base_url()."uploads/lesson_images/".$lessondata['lesson_image'] ?>" > <?php } ?> 
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



<div class="form-actions">
<div class="col-md-3">

</div>
<div class="col-md-4">
<input type="hidden" name="id" value="<?= @$lessondata['id'] ?>" />
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
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

     
        </script>




</body>
</html>