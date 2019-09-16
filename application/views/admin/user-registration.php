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
      <div class="row">
         <div class="col-md-12">
            <div class="grid simple ">
               <div class="grid-body no-border">
                  <table class="table no-more-tables">
                     <thead>
                        <tr>
                           <th style="width:5%">User_id</th>
                           <th style="width:5%">Name</th>
                           <th style="width:5%">Mobile</th>
                           <th style="width:5%">Email</th>
                           <th style="width:5%">Username</th>
						   <th style="width:10%">Address</th>
                           <th style="width:5%">City</th>
                           <th style="width:5%">State</th>
                           <th style="width:5%">Zip</th>
                           <th style="width:5%">Country</th>
                           <th style="width:10%">Crated Date</th>
                           <th style="width:5%">ACTIONS</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($userData)){ $sno=1; foreach($userData as $dat){ ?>					
                        <tr id="remove<?= $dat['id'] ?>">
                           <td class="v-align-middle"><?= $dat['id'] ?></td>
                           <td class="v-align-middle"><?= ucwords($dat['fname']).' '.ucwords($dat['lname']) ?></td>
                           <td class="v-align-middle"><?= $dat['mobile'] ?></td>
                           <td class="v-align-middle"><?= $dat['email'] ?></td>
                           <td class="v-align-middle"><?= $dat['username'] ?></td>
                           <td class="v-align-middle"><?= $dat['address'] ?></td>
                           <td class="v-align-middle"><?= $dat['city'] ?></td>
                           <td class="v-align-middle"><?= $dat['state'] ?></td>
                           <td class="v-align-middle"><?= $dat['zip'] ?></td>
                           <td class="v-align-middle"><?= $dat['country'] ?></td>
                           <td class="v-align-middle"><?= date('d-m-Y',strtotime($dat['created_date'])) ?></td>
                           <td class="v-align-middle">
                              <div class="btn-group">
                                 <a href="javascript:void(0)" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>						
                                 <ul class="dropdown-menu">
                                    <!--<li class="active" data-filter="all" data-dimension="recreation"><a href="user-details.php">View</a></li>-->						
                                    <li data-filter="camping" data-dimension="recreation"><a href="<?= base_url("admin/createAdminUser/".$dat['id']) ?>">Edit</a></li>
                                    <li data-filter="climbing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-5" data="<?= $dat['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
                                    <li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-2" data="<?= $dat['id'] ?>" data-status="<?= ($dat['status'] == 2)?'3':'2' ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);"><?= ($dat['status'] == 2)?'Deactivate':'Activate' ?></a></li>
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
</div><script>
    Array.prototype.forEach.call(document.querySelectorAll('.sweet-5'), function(button) {
        button.onclick = function() {
            var user_id = $(this).attr("data");
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
                        url: '<?= base_url("admin/deleteuser") ?>',
                        data: {
                            "user_id": user_id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                /* $("remove"+user_id).remove(); */
                                swal("Deleted!", "User has been deleted!", "success");
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