<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    padding: 7px 15px;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
<div class="page-content">

<div class="content">
<ul class="breadcrumb">
<li>
<p>YOU ARE HERE</p>
</li>
<li><a href="#" class="active">Virtual Training</a>
</li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>View/Edit <span class="semi-bold"> Virtual Trainings</span></h3>
</div>
<div class="row">
<div class="col-md-12">
<div class="grid simple ">

<div class="grid-body no-border">

		<table class="table no-more-tables">
			<thead>
				<tr>
					<th>Category</th>
					<th>Coupon Type</th>
					<th>Amount/<br/>Percentage</th>
					<th>Coupon code</th>
					<th>Start Date</th>
					<th>End Date</th>
					<th>Status</th>
					<th>Action</th>
			    </tr>
			</thead>
			<tbody>
			<?php if(!empty($promotional_offers)){
                                 $sno=1;
                                    foreach ($promotional_offers as $offer_info) {?>
				<tr>
					<td class="v-align-middle">
					<?=($offer_info['category']==1?"Trainer Booking":($offer_info['category']==2?'Membership Fee':($offer_info['category']==3?'Pay Fee':'')))?>
					</td>
					<td class="v-align-middle">
					<?=($offer_info['discount_type']==1)?"Amount":"Percentage"?>
					</td>
					<td class="v-align-middle"><?=$offer_info['discount']?></td>
					<td><span class="muted"><?=$offer_info['coupon_code']?></span></td>
					<td class="v-align-middle"><?=date("d M y",strtotime($offer_info['start_date']))?></td>
					<td><span class="muted"><?=date("d M y",strtotime($offer_info['end_date']))?></span></td>
					<td class="v-align-middle"><?=($offer_info['status']==1)?"Activated":"Deactivated"?></td>
					<td class="v-align-middle">
					<div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
					<ul class="dropdown-menu">
					<li data-filter="camping" data-dimension="recreation"><a href="<?= base_url("admin/addpromotional/".$offer_info['id']) ?>">Edit</a></li>
					<li data-filter="climbing" data-dimension="recreation"><a class="sweet-5" data="<?= $offer_info['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
					<li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-2" data="<?= $offer_info['id'] ?>" data-status="<?= ($offer_info['status'] == 1)?'2':'1' ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);"><?= ($offer_info['status'] == 1)?'Deactivate':'Activate' ?></a></li>

					</ul>
					</div>
					</td>
				</tr>
			<?php $sno++; } } ?>
			</tbody>
		</table>
</div>
</div>
</div>
</div>
</div>

</div>

</div>

   
   
<script>
 Array.prototype.forEach.call(document.querySelectorAll('.sweet-5'), function(button) {
        button.onclick = function() {
            var id = $(this).attr("data");
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/deletepromotional") ?>',
                        data: {
                            "id": id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                $("remove"+id).remove();
                                swal("Deleted!", "Trainer has been deleted!", "success");
								window.location='';
                            } else {
                                swal("Deleted!", data.message + "!", "Error");
                            }
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }
    });
</script>
<script>
 Array.prototype.forEach.call(document.querySelectorAll('.sweet-2'), function(button) {
        button.onclick = function() {
            var id = $(this).attr("data");
            var status = $(this).data("status");
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, Deactivate it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/updatepromotionalstatus") ?>',
                        data: {
                            "id": id,
                            "status": status
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                swal(data.statusmessage + "!", data.message + "!", "success");
                                window.location = "";
                            } else {
                                swal(data.statusmessage + "!", data.message + "!", "Error");
                            }
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }
    });
</script>
</body>
</html>
<script>
	//TODO AT TO API
	$('table .checkbox input').click( function() {			
		if($(this).is(':checked')){			
			$(this).parent().parent().parent().toggleClass('row_selected');					
		}
		else{	
		$(this).parent().parent().parent().toggleClass('row_selected');		
		}
	});
	// Demo charts - not required 
	$('.customer-sparkline').each(function () {	
		$(this).sparkline('html', { type:$(this).attr("data-sparkline-type"), barColor:$(this).attr("data-sparkline-color") , enableTagOptions: true  });	
	});
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementByClass("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
</html>