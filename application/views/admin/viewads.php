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

    .dropbtn:hover,
    .dropbtn:focus {
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
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #f1f1f1
    }

    .show {
        display: block;
    }
</style>
<div class="page-content">
   <div class="content">
      <ul class="breadcrumb">
         <li>
            <p>YOU ARE HERE</p>
         </li>
         <li><a href="#" class="active">Tables</a></li>
      </ul>
      <div class="page-title" style="display:none">
         <i class="icon-custom-left"></i>
         <h3>User <span class="semi-bold">Registration</span></h3>
		  <div style="float: right;"><button class="btn btn-success btn-cons downloaduserdata" type="button"><i class="icon-ok"></i> Download</button></div>
      </div>
      <div class="row" style="width: max-content;" >
         <div class="col-md-12">
            <div><?php echo $this->session->flashdata('message'); ?> </div>
            <div class="grid simple ">
               <div class="grid-body no-border">                 
                  <table class="table no-more-tables" id="example">
                     <thead>
                        <tr>
                           <th>Device Name</th>
                           <th>Title</th>
						   <th>User Name</th>
                           <th>Type</th>
                           <th>Duration</th>
                           <th>Locations</th>
						   <th>Live Enabled</th>
                           <th>Category</th>
                           <th>Image/Video</th>
                           <th>Created Date</th>
                           <th>Start Date</th>
                           <th>End Date</th>
                           <th>Status</th>
						   <th>Ad Play Count</th>
                           <th>ACTIONS</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($adsdata)){ foreach($adsdata as $dat){ ?>					
                        <tr id="remove<?= $dat['id'] ?>">
                           <td><?= $dat['device_name'] ?></td>
                           <td><?= ucwords($dat['adTitle']) ?></td>
						   <td><?= $dat['username'] ?></td>
                           <td><?= $dat['adType'] ?></td>
                           <td><?= $dat['adDuration'] ?></td>
                           <td><?= $dat['locations'] ?></td>
                           <td><?= $dat['isLiveEnabled'] ?></td>
                           <td><?= $dat['adCategory'] ?></td>
                           <td><?php if($dat['adType'] == 'image'){ ?>
                            <img src="<?= base_url('uploads/Ads_images/'.$dat['adFile']) ?>" style="width: 15%;" />
                            <?php }else{
                              echo $dat['adFile'];
                            } ?></td>
                           <td><?= date("d/m/Y H:i:s",strtotime($dat['created_date'])) ?></td>
                           <td><?= ($dat['start_date'] != '0000-00-00 00:00:00'?date('d-m-Y H:i:s',strtotime($dat['start_date'])):'') ?></td>
                           <td><?= ($dat['end_date'] != '0000-00-00 00:00:00'?date('d-m-Y H:i:s',strtotime($dat['end_date'])):'') ?></td>
                           <td><?= ($dat['status']==1?'Pending':($dat['status']==2?'Active':($dat['status']==3?'In-active':''))) ?></td> 
						   <td></td>
                           <td class="v-align-middle">
                              <div class="btn-group">
                                 <a href="javascript:void(0)" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>						
                                 <ul class="dropdown-menu">
                                    <!--<li class="active" data-filter="all" data-dimension="recreation"><a href="user-details.php">View</a></li>-->						
                                    <li data-filter="camping" data-dimension="recreation"><a href="<?= base_url("admin/editads/".$dat['id']) ?>">Edit</a></li>
                                    <li data-filter="climbing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-5" data="<?= $dat['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
                                    <!--<li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-2" data="<?= $dat['id'] ?>" data-status="<?= ($dat['status'] == 2)?'3':'2' ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);"><?= ($dat['status'] == 2)?'Deactivate':'Activate' ?></a></li>-->
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <?php } } ?>				
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div><script>
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
                        url: '<?= base_url("admin/ad_delete") ?>',
                        data: {
                            "id": id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                /* $("remove"+user_id).remove(); */
                                swal("Deleted!", "Ad has been deleted!", "success");
								                window.location = "";
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
            var user_id = $(this).attr("data");
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
                        url: '<?= base_url("admin/updateuserstatus") ?>',
                        data: {
                            "user_id": user_id,
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
	$(document).on("click",".downloaduserdata",function(){
		window.location="<?= base_url('admin/downloaduserdata') ?>";
	});
</script>
</body>
</html>