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
<form method="post" action="<?=base_url("admin/insertarticle")?>" enctype="multipart/form-data">

<div class="form-group">

<div class="col-md-3">
<label class="form-label"> Title</label>
</div>
<div class="col-md-4">
<input type="text" name="title" class="form-control" value="<?= @$articadData['title'] ?>" required />
</div>

<div class="clearfix"></div>
</div>
<!-- <div class="form-group">

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
</div> -->

<div class="form-group">

<div class="col-md-3">
<label class="form-label">Description</label>
</div>
<div class="col-md-9">
 <div class="form-group">
    
    <textarea  name="description" class="summernote" id="contents" title="Contents" required><?= @$articadData['description'] ?></textarea>
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
                        <input type="file" name="image" name="image-file">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
				 <?php if(isset($articadData['banner_image']) && $articadData['banner_image'] != ''){ ?> <img style="width: 50%;height: 50%;" src="<?= base_url()."uploads/article_images/".$articadData['banner_image'] ?>" > <?php } ?>
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
<input type="text" name="author" class="form-control" value="<?= @$articadData['author'] ?>" required />
</div>

<div class="clearfix"></div>
</div>

<div class="form-actions">
<div class="col-md-3">

</div>
<input type="hidden" name="id" value="<?= @$articadData['id'] ?>" />
<div class="col-md-4">
<button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Submit</button>
</div>
</div></form>
</div>

</div>
</div>
</div>
</div>
</div>



</div>
</div>



</div>
<!-- <script src="js/pace.min.js" type="text/javascript"></script>

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
<script src="js/bootstrap-imageupload.js" type="text/javascript"></script> -->

<script src="<?=base_url('assets/admin/')?>js/gulpfile.js" type="text/javascript"></script>

<script src="<?=base_url('assets/admin/')?>js/summernote.js" type="text/javascript"></script>

<!-- <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="js/bootstrap-timepicker.min.js" type="text/javascript"></script>

<script src="js/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="js/autoNumeric.js" type="text/javascript"></script>
<script src="js/ios7-switch.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>

<script src="js/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="js/bootstrap-clockpicker.min.js" type="text/javascript"></script> -->

<script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

     
        </script>


 <script type="text/javascript">
    $(function() {
      $('.summernote').summernote({
        height: 200
      });

     /*  $('form').on('submit', function (e) {
        e.preventDefault();
        
      }); */
    });
  </script>

</body>
</html>