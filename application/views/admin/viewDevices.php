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
<?php
function datetimeCalculate($start,$end){
    $dteStart = new DateTime($start); 
    $dteEnd   = new DateTime($end);
    $dteDiff  = $dteStart->diff($dteEnd);
    //$dteDiff->format("%H:%I:%S"); 
    $days = $dteDiff->days;
    $hours= $dteDiff->h;
    $min= $dteDiff->i;
    $sec= $dteDiff->s;
    return ($days*86400)+($hours*3600)+($min*60)+$sec;
} 
?>
<div class="page-content">
   <div class="content">
      <ul class="breadcrumb">
         <li>
            <p>YOU ARE HERE</p>
         </li>
         <li><a href="#" class="active">Tables</a></li>
      </ul>
      <div class="page-title">
         <i class="icon-custom-left"></i>
         <h3>View <span class="semi-bold">Devicesa Data</span></h3>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="grid simple ">
               <div class="grid-body no-border">
                  <table class="table no-more-tables">
                     <thead>
                        <tr>
                           <th style="width:5%"> S.No</th>
                           <th style="width:10%">Device Id</th>
						   <th style="width:10%">Device Name</th>
						   <th style="width:10%">Device Location</th>
                           <th style="width:10%">Online/Offline</th>
                           <th style="width:10%">Status</th>
                           <th style="width:7%">ACTIONS</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($devicedata)){ $sno=1; foreach($devicedata as $dat){ ?>					
                        <tr id="remove<?= $dat['id'] ?>">
                           <td class="v-align-middle"><?= $sno ?></td>
                           <td><span class="muted"><?= $dat['device_id'] ?></span></td>
            						   <td><span class="muted"><?= ucwords($dat['device_name']) ?></span></td>
            						   <td><span class="muted"><?= ucwords($dat['device_location']) ?></span></td>
                            <?php if($dat['lastCommunicareTime'] != '0000-00-00 00:00:00') { ?>
                           <td>
                            <span class="label <?= (datetimeCalculate(date('Y-m-d H:i:s'),$dat['lastCommunicareTime']) <= 300 ? "label-success" : "label-important");?>">
                            <?= (datetimeCalculate(date('Y-m-d H:i:s'),$dat['lastCommunicareTime']) <= 300 ? "Online" : "Offline");?></span>
                            </td>
                        <?php }else{ ?>
                            <td><span class="label label-important">Offline</span></td>
                        <?php } ?>
                           <td class="v-align-center">	
            						   <span class="label <?= ($dat['status'] == 'inactive')?'label-important':(($dat['status'] == 'active')?'label-success':'') ?>"><?= $dat['status'] ?></span>
            						   </td>
                           <td class="v-align-middle">
                              <div class="btn-group">
                                 <a href="javascript:void(0)" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>						
                                 <ul class="dropdown-menu">
                                    <li data-filter="camping" data-dimension="recreation"><a href="<?= base_url("admin/adddevice/".$dat['id']) ?>">Edit</a></li>
                                    <li data-filter="climbing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-5" data="<?= $dat['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
                                    <li data-filter="fishing" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-2" data="<?= $dat['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Reboot Device</a></li>
									<li data-filter="fishing1" data-dimension="recreation" style="cursor: pointer;"><a class="sweet-3" data="<?= $dat['id'] ?>" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);">Restart Device</a></li>									
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <?php $sno++;} } ?>				
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
                        url: '<?= base_url("admin/deletedevice") ?>',
                        data: {
                            "id": id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                $("remove"+id).remove();
                                swal("Deleted!", "Device has been deleted!", "success");
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
            swal({
                title: "Are you sure?",
                text: "You want REBOOT device!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, Reboot it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/rebootDevice") ?>',
                        data: {
                            "id": id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                swal(data.message + "!", "success");
                                window.location = "";
                            } else {
                                swal(data.message + "!", "Error");
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
    Array.prototype.forEach.call(document.querySelectorAll('.sweet-3'), function(button) {
        button.onclick = function() {
            var id = $(this).attr("data");
            swal({
                title: "Are you sure?",
                text: "You want RESTART device!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-danger',
                confirmButtonText: 'Yes, Restart it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '<?= base_url("admin/reStartDevice") ?>',
                        data: {
                            "id": id
                        },
                        dataType: "json",
                        success: function(data) {
                            if (data.success == 1) {
                                swal(data.message + "!", "success");
                                window.location = "";
                            } else {
                                swal(data.message + "!", "Error");
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