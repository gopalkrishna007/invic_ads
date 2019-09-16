<?php
 include('header.php');
 $request_method = $this->router->fetch_method();
 ?>
<?php
    foreach($views as $view){
      $this->load->view('user_dashboard/'.$view);
    }
?>
<?php 
if($request_method == 'addads' || $request_method == 'editads'){
	include('footer1.php');
}else{
	include('footer.php');
}
?>

