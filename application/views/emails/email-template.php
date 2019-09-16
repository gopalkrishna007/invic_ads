
<html>


<head>

<title>HTML email
</title>
 

<link href="https://fonts.googleapis.com/css?family=Roboto:500,100,300,700,400" media="all" rel="stylesheet" type="text/css">
 

<link href="http://site.khusaki.com/qodro/fonts/ZapfinoExtraLT-One.otf?family=logo:500,400,700" media="all" rel="stylesheet" type="text/css">
 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
 
<style type="text/css">
 @font-face {
	font-family: 'logo';
	src: url(../fonts/ZapfinoExtraLT-One.otf);
}
@font-face {
	font-family: 'logo-cap';
	src: url(../fonts/brush%20script%20mt%20kursiv.ttf);
, src: url(../fonts/BRUSHSCI.ttf);
}
.navbar-default {
    background-color: #f8f8f8;
    border-bottom: 4px Solid #01ADEF;
}

.socialWrapper {
  display: flex;
  justify-content: center;
  background: none;
  width: 100%;
}

.fa {
  color: #000;
  transition: 0.5s;
  margin-left: 8px;
  font-size: 26px;
}

.fa-hover:hover {
  color: #01ADEF;
}
.copywrite-txt{
    position: absolute;
    left: 0px;
	font-size: 12px;
    line-height: 24px;
}
.mvng-left-icnns{
    position: absolute;
    left: 28%;
}
</style>

</head>


<body style="margin:0px; padding:0px;">


<div style="width:100%;background-color:#f7f7f7"> 


<div style="max-width:600px; margin:auto; border: 2px solid #ddd;"> 

<nav class="navbar navbar-default">
  

<div class="container-fluid">
    

<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        

<span class="icon-bar">
</span>
        

<span class="icon-bar">
</span>
        

<span class="icon-bar">
</span> 
      </button>
      <a class="navbar-brand" href="#" style="color:#01ADEF;"> <img src="<?= base_url() ?>assets/emails/images/logo.png" style="width:131px;height:30px;margin-top: -3px;"></a> 
    
</div>
    

<div class="collapse navbar-collapse" id="myNavbar">
      
      
<ul class="nav navbar-nav navbar-right">
        
<!--<li><a href="#">

<span class="glyphicon glyphicon-user">
</span> Sign Up</a></li>
        
<li><a href="#">

<span class="glyphicon glyphicon-log-in">
</span> Login</a></li>
      
</ul>-->
    
</div>
  
</div>
</nav>


<div style="clear:both;">
</div>


<div style="max-width:600px;"><a rel="nofollow" href="#"> <img src="<?= base_url() ?>assets/emails/images/banner.jpg" width="100%" style="margin-top: -20px;"></a>
</div>


<div style="max-width:598px;padding:10px;background-color:#fff; color:#000;background-color:#fff;font-family:bookman old style,new york,times,serif;font-size:13px;"> 
	<font style="font-size:14px"> 
		<center>
<table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;margin:0 auto;padding:0"><tbody>
<tr style="vertical-align:top;text-align:left;padding:0" align="left">
<td style="border-collapse:collapse!important;vertical-align:top;text-align:left;color:#636363;font-weight:normal;line-height:19px;font-size:14px;margin:0;padding:0px 0px 10px" valign="top" align="left"> 
	<font style="font-size:14px; text-align:justify;"> 
	 Dear <?= ucwords($username) ?>, 
	 
<br> 
	<?= $message ?>.
<br> 
<br>
	

<div style="width:100%;margin-top:5px;float:left"> 
	<center>
<table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;margin:0 auto;padding:0"><tbody>
<tr style="vertical-align:top;text-align:left;padding:0" align="left">
<td style="border-collapse:collapse!important;vertical-align:top;text-align:left;color:#636363;font-weight:normal;line-height:19px;font-size:14px;margin:0;padding:0px" valign="top" align="left"> 
	
<table style="border-spacing:0;border-collapse:collapse;vertical-align:top;text-align:left;width:100%;overflow:hidden;padding:0"><tbody>
<tr style="vertical-align:top;text-align:left;padding:0" align="left">
	
<td style="border-collapse:collapse!important;vertical-align:top;text-align:center;color:#ffffff;font-weight:normal;line-height:19px;font-size:13px;display:block;width:auto!important;border-radius:3px;background:#01ADEF;margin:0;padding:8px 0" valign="top" bgcolor="#ae080e" align="center"> 
	<a rel="nofollow" style="font-weight:normal;color:#ffffff!important;text-decoration:none!important;font-size:14px;padding:0px 20px" href="#"></a> 
	
</td> 
	
</tr></tbody>
</table>
</td> 
	
</tr></tbody>
</table></center> 
	
</div>
	</font>
	
</td>
</tr></tbody>
</table></center>
	

<div style="margin:10px 0 0 0"> 
	Warm Regards, 
	
</div> 
	

<div style="margin:5px 0 0 0"> 
	Edumote Team 
	
</div> 

	</font>

</div> 


<div style="background-color:#323232;min-height:42px;padding:10px;font-size:11px;color:#bdbdbd;font-family:Roboto;"> 


<div style="row"> 
	

<div class="col-md-6">
		

<div class="copywrite-txt">© 2017 Powered By Khusaki Technologies PVT LTD .
</div>
	
</div>
	

<div class="col-md-6">
		

<div class="socialWrapper mvng-left-icnns">
	  <a href="#" class="twitter-icn-clr"><i class="fa fa-twitter-square fa-2x fa-hover"></i></a>
	  <a href="#"><i class="fa fa-facebook-square fa-2x fa-hover"></i></a>
	  <a href="#"><i class="fa fa-google-plus-square fa-2x fa-hover"></i></a>
	  <a href="#"><i class="fa fa-github-square fa-2x fa-hover"></i></a>
		
</div>
	
</div>



</div> 
 

</div>


</div> 

</div>

</body>

</html>