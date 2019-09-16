<style>
.image-responsive{
    width:100%;
}
.padding-10{
    padding:10px;
}
.rate-code{
	width:20px;
	height:20px;
}
.rate-txt{
	position: relative;
    top: 3px;
}
#rate-mvng{
	float: right;
    position: relative;
    right: 25px;
    top: 7px;
}
.star-rating .clear-rating, .star-rating-rtl {
	display:none;
}
.caption span {
    display: none;
}
.para-txt-stye{
	margin-top: 3%;
    margin-bottom: 4%;
}
.glyphicon-minus-sign{
	display: none;
}
.rating-container {
    font-size: 15px !important;
}
.article-page {
    background: #fff;
    padding: 10px;
}
</style>

<div class="page-content">
<div class="page-clr">
	<div class="technical-docs docs-immg full-image">
	  <h1 class="technical-txt"><?= ucwords($documentData['technical_doc_category_name']) ?></h1>
	</div>

	<section class="article-page">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8">
				     <!--<div class="col-md-12">
				         <div class="col-md-2 padding-10">
				            	<img src="<?= ($documentData['profile_pic'] != '')?base_url("uploads/user_profile_pic/".$documentData['profile_pic']): base_url("assets/images/slider/tutor1.png") ?>" class="image-responsive"/>
				         </div>
				         <div class="col-md-8">	
				            <h3 style="color:#01ADEF;"><?= ucwords($documentData['title']) ?></h3>
				            <span class="color-theme"><i class="fa fa-calendar mr-5"></i> <?= ($documentData['updated_date'] != '0000-00-00 00:00:00'?date("d M Y",strtotime($documentData['updated_date'])):date("d M Y",strtotime($documentData['created_date']))) ?></span>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="article-container">
										<input id="input-21e" value="<?= (@$dat['rating'] != ''?@$dat['rating']:'0') ?>" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs" readonly />
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<div class="hint"><?= (@$dat['rating'] != ''?@$dat['rating']:'0') ?> ratings</div>
									
								</div>
							</div>
				         </div>
						 <div class="col-md-2">
							<a href="javascript:void(0)" class="ratingbutton" data="<?= $documentData['id'] ?>" id="rate-mvng">
								<img src="http://localhost/gctechnologies/assets/images/icons/rate.png" class="rate-code">
								<span class="rate-txt">RateUs</span>
							</a>
						</div>
				     </div>-->
					<div class="inner-page">
					
						<p><?= ucwords($documentData['description']) ?></p>	
					</div>					
				</div>
				<!--<div class="col-md-3 col-sm-4">
					<h4>Recent Posts</h4>
					<div class="widget-body ptb-30">
					<?php if(!empty($usertechnicalData)){ $i=1; foreach($usertechnicalData as $dat1){ if($i <=5){ ?>
						<div class="recent-post media">
						   <a href="<?= base_url("home/user_technical_document_innerpage/".$dat1['id']) ?>">
							<div class="post-thumb media-left">
								<a href="<?= base_url("home/user_technical_document_innerpage/".$dat1['id']) ?>">
									<img src="<?= ($dat1['profile_pic'] != '')?base_url("uploads/user_profile_pic/".$dat1['profile_pic']): base_url("assets/images/slider/tutor1.png") ?>" class="media-object" style="height: 6%;" />
								</a>
							</div>
							<div class="media-body">
								<p class="mb-5">
									<a href="javascript:void(0)"><?= ucwords($dat1['title']) ?></a>
								</p>
								<span class="color-theme"><i class="fa fa-calendar mr-5"></i> <?= ($dat1['updated_date'] != '0000-00-00 00:00:00'?date("d M Y",strtotime($dat1['updated_date'])):date("d M Y",strtotime($dat1['created_date']))) ?></span>
							</div>
							</a>
						</div>
					<?php $i++; } } } ?>
						
					</div>
				</div>-->
			</div>
		</div>
	</section>
</div>
<!-- Modal -->
<div id="myRate" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
		<div class="modal-header hed-clr">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Rate Us</h4>
		</div>
		<div class="modal-body">
		<form method="post">
			<center><input id="input-21e" value="" name="rating" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs"></center>
			<div class="form-group">
				<textarea class="form-control" placeholder="Enter Your Feedback" name="review" id="review"></textarea>
			</div>
			<input type="hidden" name="document_id" id="document_id" value="<?= $documentData['id'] ?>" />
			<button type="button" class="btn btn-info btn-block submitrating">Submit</button>
		 </form>
		</div>
    </div>

  </div>
</div>
</div>
<script>
$(document).on("click",".ratingbutton",function(){
	var user_id = "<?= @$this->session->userdata['userDetails']['id'] ?>";
	if(user_id != ''){
		var document_id = $(this).attr("data");
		if(document_id != ''){
			$("#document_id").val(document_id);
			$("#myRate").modal("show");
		}else{
			$("#document_id").val();
			$("#myRate").modal("hide");
		}
	}else{
		$("#myLogin").modal("show");
	}
});
$(document).on("click",".submitrating",function(){
	  var rating =$(".rating").val();
	  var review =$("#review").val();
	  var document_id =$("#document_id").val();
	    $.ajax({
			type: "POST",
			url: '<?= base_url("users/savetechnicaldocumentrating") ?>',
			data: {"rating": rating,"review":review,"document_id":document_id},
			dataType: "json",
			success: function(data) {
				if (data.success == 1) {
					alert(data.message);
					window.location='';					
				} else {
					alert(data.message);					
				}
				
			}
		});
	  
});
</script>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
<script src="<?= base_url() ?>assets/js/star-rating.js" type="text/javascript"></script>
<script>
 $("#input-21f").rating({
            starCaptions: function(val) {
                if (val < 3) {
                    return val;
                } else {
                    return 'high';
                }
            },
            starCaptionClasses: function(val) {
                if (val < 3) {
                    return 'label label-danger';
                } else {
                    return 'label label-success';
                }
            },
            hoverOnClear: false
        });
</script>