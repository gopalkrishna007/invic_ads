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
<li><a href="#" class="active">Contact Us</a>
</li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>View/Edit <span class="semi-bold"> Contact Us Page Data</span></h3>
</div>
<div class="row">
<div class="col-md-12">
<div class="grid simple ">

<div class="grid-body no-border">

		<table class="table no-more-tables">
			<thead>
				<tr>
					<th>Sno</th>
					<th>Name</th>
					<th>Email Id</th>
					<th>Subject</th>
					<th>Message</th>
					<th>Created Date</th>
					<!--<th>Action</th>-->
			    </tr>
			</thead>
			<tbody>
			<?php if(!empty($contactData)){
					$sno=1;
					foreach ($contactData as $contact) {?>
				<tr>
				    <td class="v-align-middle"><?= $sno; ?></td>
					<td class="v-align-middle"><?= ucwords($contact['name'])?></td>
					<td class="v-align-middle"><?=$contact['email']?></td>
					<td><span class="muted"><?=$contact['subject']?></span></td>
					<td class="v-align-middle"><?= $contact['message'] ?></td>
					<td><span class="muted"><?=date("d M y h:i:s a",strtotime($contact['created_date']))?></span></td>
					
					<!--<td class="v-align-middle">
					<div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
					<ul class="dropdown-menu">
					 <?php if($contact['status'] == 1){ ?>
						<li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-2" data="<?= $contact['id'] ?>" data-status="2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Active</a></li>
						<li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-5" data="<?= $contact['id'] ?>" data-status="3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">In Active</a></li>
					<?php }else if($contact['status'] == 2){ ?>
						<li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-5" data="<?= $contact['id'] ?>" data-status="3" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">In Active</a></li>
					<?php }else if($contact['status'] == 3){ ?>
						 <li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-2" data="<?= $contact['id'] ?>" data-status="2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Active</a></li>
					<?php }else{ } ?>

					</ul>
					</div>
					</td>-->
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
			 var status = $(this).data("status");
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, In Active it!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/updateusertechnicaldocument") ?>',
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
                confirmButtonText: 'Yes, Active it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/updateusertechnicaldocument") ?>',
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
	$('table .checkbox input').click( function() {			
		if($(this).is(':checked')){			
			$(this).parent().parent().parent().toggleClass('row_selected');					
		}
		else{	
		$(this).parent().parent().parent().toggleClass('row_selected');		
		}
	});
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