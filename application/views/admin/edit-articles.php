<?php
 include_once('includes/header.php');
    ?>
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
.banner-img{
	width:100px;
	height:50px;
	padding:2px;
	border:1px solid #ccc;
}
.banner-img img{
	width:100%;
	height:100%;
}
</style>
<div class="page-content">

<div class="content">
<ul class="breadcrumb">
<li>
<p>YOU ARE HERE</p>
</li>
<li><a href="#" class="active">Tables</a>
</li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>View/Edit <span class="semi-bold"> Articles</span></h3>
</div>
<div class="row">
<div class="col-md-12">
<div class="col-md-3"></div>
<div class="col-md-3">
<div class="form-group">
<select id="source" style="width:100%">
<option value="AK">Select Category</option>
<optgroup label="Developing">
<option value="AK">Java</option>
<option value="HI">PHP</option>
</optgroup>
<optgroup label="Training A">
<option value="CA">Training 1</option>
<option value="NV">Nevada</option>
<option value="OR">Oregon</option>
<option value="WA">Washington</option>
</optgroup>


</select>
</div>
</div>
<div class="col-md-3">
<input type="text" class="form-control" placeholder="Search Author">
</div>
</div>
<div class="col-md-12">
<div class="grid simple ">

<div class="grid-body no-border">

<table class="table no-more-tables">
<thead>
<tr>
 <th style="width:5%">
   S.No
</th>
<th style="width:10%">Banner Image</th>
<th style="width:10%">Category</th>
<th style="width:10%">Title</th>
<th style="width:8%">Author</th>
<th style="width:7%">ACTIONS</th>

</tr>
</thead>
<tbody>
<tr>
<td class="v-align-middle">
1
</td>
<td class="v-align-middle">
<div class="banner-img"><img src="img/1.jpg"/></div>
</td>
<td class="v-align-middle">JAVA</td>


<td><span class="muted">Good better Best</span>
</td>
<td class="v-align-middle">Sajjan Kumar</td>
<td class="v-align-middle">
<div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
<ul class="dropdown-menu">
<li class="active" data-filter="all" data-dimension="recreation"><a href="create-articles.php">View</a></li>
<li data-filter="camping" data-dimension="recreation"><a href="create-articles.php">Edit</a></li>
<li data-filter="climbing" data-dimension="recreation"><a class="sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
<li data-filter="fishing" data-dimension="recreation"><a class="sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Deactivate</a></li>

</ul>
</div>
</td>
</tr>
<tr>
<td class="v-align-middle">
2
</td>
<td class="v-align-middle">
<div class="banner-img"><img src="img/1.jpg"/></div>
</td>
<td class="v-align-middle">JAVA</td>


<td><span class="muted">Good better Best</span>
</td>
<td class="v-align-middle">Sajjan Kumar</td>
<td class="v-align-middle">
<div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
<ul class="dropdown-menu">
<li class="active" data-filter="all" data-dimension="recreation"><a href="create-articles.php">View</a></li>
<li data-filter="camping" data-dimension="recreation"><a href="create-articles.php">Edit</a></li>
<li data-filter="climbing" data-dimension="recreation"><a class="sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
<li data-filter="fishing" data-dimension="recreation"><a class="sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Deactivate</a></li>

</ul>
</div>
</td>
</tr>
<tr>
<td class="v-align-middle">
3
</td>
<td class="v-align-middle">
<div class="banner-img"><img src="img/1.jpg"/></div>
</td>
<td class="v-align-middle">JAVA</td>


<td><span class="muted">Good better Best</span>
</td>
<td class="v-align-middle">Sajjan Kumar</td>
<td class="v-align-middle">
<div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
<ul class="dropdown-menu">
<li class="active" data-filter="all" data-dimension="recreation"><a href="create-articles.php">View</a></li>
<li data-filter="camping" data-dimension="recreation"><a href="create-articles.php">Edit</a></li>
<li data-filter="climbing" data-dimension="recreation"><a class="sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
<li data-filter="fishing" data-dimension="recreation"><a class="sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Deactivate</a></li>

</ul>
</div>
</td>
</tr>
<tr>
<td class="v-align-middle">
4
</td>
<td class="v-align-middle">
<div class="banner-img"><img src="img/1.jpg"/></div>
</td>
<td class="v-align-middle">JAVA</td>


<td><span class="muted">Good better Best</span>
</td>
<td class="v-align-middle">Sajjan Kumar</td>
<td class="v-align-middle">
<div class="btn-group"> <a href="#" data-toggle="dropdown" class="btn dropdown-toggle btn-demo-space" aria-expanded="true"><i class="fa fa-bars" aria-hidden="true"></i> </a>
<ul class="dropdown-menu">
<li class="active" data-filter="all" data-dimension="recreation"><a href="create-articles.php">View</a></li>
<li data-filter="camping" data-dimension="recreation"><a href="create-articles.php">Edit</a></li>
<li data-filter="climbing" data-dimension="recreation"><a class="sweet-5" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-5']);">Delete</a></li>
<li data-filter="fishing" data-dimension="recreation"><a class="sweet-2" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-2']);">Deactivate</a></li>

</ul>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</div>

</div>


<script src="js/pace.min.js" type="text/javascript"></script>

<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jqueryblockui.min.js" type="text/javascript"></script>
<script src="js/jquery.unveil.min.js" type="text/javascript"></script>
<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="js/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<script src="js/select2.min.js" type="text/javascript"></script>


<script src="js/webarch.js" type="text/javascript"></script>
<script src="js/chat.js" type="text/javascript"></script>


<script src="js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="js/raphael-min.js"></script>
<script src="js/d3.v2.js"></script>
<script src="js/rickshaw.min.js"></script>
<script src="js/jquery-sparkline.js"></script>
<script src="js/skycons.js"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/gmaps.js" type="text/javascript"></script>
<script src="js/jquery.easing.js" type="text/javascript"></script>
<script src="js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="js/hammer.js" type="text/javascript"></script>
<script src="js/mapplic.js" type="text/javascript"></script>
<script src="js/jquery.flot.js" type="text/javascript"></script>
<script src="js/MetroJs.min.js" type="text/javascript"></script>
<script src="js/dashboard_v2.js" type="text/javascript"></script>


<script src="js/sweetalert.js"></script>
   <link rel="stylesheet" href="css/sweetalert.css">
   
   
   <script>

 Array.prototype.forEach.call(document.querySelectorAll('.sweet-5'),function(button){
       
        button.onclick = function(){
             swal({
					  title: "Are you sure?",
					  text: "You will not be able to recover this imaginary file!",
					  type: "warning",
					  showCancelButton: true,
					  confirmButtonClass: 'btn-danger',
					  confirmButtonText: 'Yes, delete it!',
					  cancelButtonText: "No, cancel plx!",
					  closeOnConfirm: false,
					  closeOnCancel: false
               },
           function(isConfirm){
          if (isConfirm){
            swal("Deleted!", "Your imaginary file has been deleted!", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
        }
    });
	

</script>
<script>
 Array.prototype.forEach.call(document.querySelectorAll('.sweet-2'),function(button){
       
        button.onclick = function(){
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
               },
           function(isConfirm){
          if (isConfirm){
            swal("Deactivated!", "Your imaginary file has been Deactivate!", "success");
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
	//TODO AT TO API
	$('table .checkbox input').click( function() {			
		if($(this).is(':checked')){			
			$(this).parent().parent().parent().toggleClass('row_selected');					
		}
		else{	
		$(this).parent().parent().parent().toggleClass('row_selected');		
		}
	});
	// Demo charts - not required 
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

// Close the dropdown if the user clicks outside of it
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