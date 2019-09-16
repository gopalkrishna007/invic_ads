     <div class="page-content">
     <div><h3><?php echo $this->session->flashdata('message')?></h3></div>
      <div class="content-wrapper">
          <div class="row">
          <div class="col-lg-9">

            <form  method="post" id="form1" method="post" action="<?=base_url('admin/updatepassword')?>">
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title">Change Password</h5>
                <br>

              </div>

              <div class="col-md-8 col-md-offset-2 product">
              <div class="form-group">
                  <label class="control-label col-lg-4">Current Password</label>
                  <div class="col-lg-8">
      <input type="text" class="form-control" name="old_password" id="current_pwd"  placeholder="Create Password">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-4">New Password</label>
                  <div class="col-lg-8">
      <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-lg-4">Confirm Password</label>
                  <div class="col-lg-8">
      <input type="text" class="form-control" name="cpassword"   placeholder="Confirm Password">
                  </div>
                </div>

                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="sub-btn">
                
                
                <button type="submit" class="btn btn-primary active legitRipple center">SUBMIT</button>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>
            </form>
            

          </div>

          <div class="col-lg-3"></div>
        </div>
      </div>
      <!-- /main content -->

    </div>
    


         <script type="text/javascript">
         $(document).ready(function(){
          
         
          $('#form1').validate({
            rules:{
             
              old_password:{
                required:true,
                remote:
                {
                url: "<?=base_url('admin/checkcurrentpassword')?>",
                type:'POST',
                data: {
                  current_pwd : function() 
                        {
                          return $( "#current_pwd" ).val();
              
              }
                        }
                      }

              },

              password:"required",
              cpassword:{
                required: true,
                equalTo:'#password',
              },
              broucher: "required",
              certification_offers:"required",

             'faculty[]':{
                required: true,
               
              }
             
            },
            messages:{
              old_password:{
                remote: "please provide current password",
              }

              
            }
          });
          });

         </script>
         