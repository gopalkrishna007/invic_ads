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
function register_type($register_type){
    switch ($register_type) {
		case '1':
			return "Online Trainer Data";
			break;
		case '2':
			return "Institute Data";
			break;    
		
		case '3':
			return "College Data";
			break;
		case '4':
			return "School Data";
			break;     
		default:
			
			break;
	}
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
         <h3>User <span class="semi-bold">Data</span></h3>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="grid simple ">
               <div class="grid-body no-border">
                  <table class="table no-more-tables">
                     <thead>
                        <tr>
                           <th style="width:4%"> S.No</th>
                           <th style="width:7%">Type</th>
                           <th style="width:10%">User Name</th>
                           <th style="width:7%">Mobile No.</th>
                           <th style="width:10%">Email ID</th>
                           <th style="width:7%">Training Type</th>
                           <th style="width:4%">Experience</th>
						    <th style="width:5%">Qualification</th>
							<th style="width:7%">Inistitute</th>
							 <th style="width:7%">City</th>
							  <th style="width:7%">Location</th>							   
							  <th style="width:7%">Description</th>
							  <th style="width:7%">Date</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if(!empty($allData)){ $sno=1; foreach($allData as $dat){ ?>					
                        <tr id="remove<?= $dat['id'] ?>">
                           <td class="v-align-middle"><?= $sno ?></td>
                           <td class="v-align-middle"><?= register_type($dat['register_type']) ?></td>
                           <td><span class="muted"><?= ucwords($dat['name']) ?></span></td>
                           <td class="v-align-middle"><?= $dat['mobile'] ?></td>
                           <td class="v-align-middle"><?= $dat['email_id'] ?></td>
                           <td class="v-align-center"><?= $dat['trining'] ?></td>
						    <td class="v-align-middle"><?= $dat['experience'] ?></td>
                           <td class="v-align-middle"><?= $dat['qualification'] ?></td>
                           <td class="v-align-center"><?= $dat['inistitute'] ?></td>
						    <td class="v-align-middle"><?= $dat['city'] ?></td>
                           <td class="v-align-middle"><?= $dat['location'] ?></td>
                           <td class="v-align-center"><?= $dat['description'] ?></td>
                           <td class="v-align-center"><?= date("d-m-Y",strtotime($dat['description'])) ?></td>
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
</div>
</body>
</html>