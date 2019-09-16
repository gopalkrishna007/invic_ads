<?php
 include('header.php');
 $request_method = $this->router->fetch_method();
 ?>
<?php
    foreach($views as $view){
      $this->load->view('admin/'.$view);
    }
?>
<?php 
if($request_method == 'addads' || $request_method == 'editads' || $request_method == 'franchise'){
	include('footer1.php');
}else{
	include('footer.php');
}
?>

