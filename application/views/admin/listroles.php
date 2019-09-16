<div class="page-content">
   <div class="content">
      <ul class="breadcrumb">
         <li>
            <p>YOU ARE HERE</p>
         </li>
         <li><a href="#" class="active">Roles</a></li>
      </ul>
      <div class="page-title">
         <i class="icon-custom-left"></i>
         <h3>Roles  <span class="semi-bold">List</span></h3>
      </div>
      <div class="row">
         <div class="col-md-12">
			<div><?php echo $this->session->flashdata('message'); ?> </div>
            <div class="grid simple ">
               <div class="grid-body no-border">
                  <table class="table no-more-tables">
                     <thead>
                        <tr>
                           <th style="width:5%">S.No</th>
                           <th style="width:10%">Role Name</th>
                           <th style="width:30%">Main Pages</th>
                           <th style="width:30%">Sub Pages</th>
                           <th style="width:20%">Created Date</th>
                           <th style="width:5%">ACTIONS</th>
                        </tr>
                     </thead>
                     <tbody>
						<?php foreach($modulesRolesData as $key => $row){ ?>
                        <tr>
                           <td class="v-align-middle"><?= $key+1 ?></td>
                           <td class="v-align-middle"><?= ucwords($row['role_name']) ?></td>
                           <td class="v-align-middle"><?= ucwords($row['module_names']) ?></td>
						   <?php $pagesData = $this->module_role_model->getmodulePages($row['id']); ?>
                           <td class="v-align-middle"><?= ucwords($pagesData['page_names']) ?></td>
                           <td class="v-align-middle"><?= date('d-m-Y H:i:s',strtotime($row['created_date'])) ?></td>
                           <td class="v-align-middle">
                              <div class="btn-group">
                                 <a href="javascript:void(0)" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
                                 <ul class="dropdown-menu">
                                    <li class="active" data-filter="all" data-dimension="recreation"><a href="<?= base_url(); ?>admin/editroles/<?php echo $row['id']; ?>">View/Edit</a></li>
                                 </ul>
                              </div>
                           </td>
                        </tr>
						<?php } ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>