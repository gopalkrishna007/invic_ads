<?php
 include_once('includes/header.php');
    ?>

<div class="page-content">

<div id="portlet-config" class="modal hide">
<div class="modal-header">
<button data-dismiss="modal" class="close" type="button"></button>
<h3>Widget Settings</h3>
</div>
<div class="modal-body">Widget settings form goes here</div>
</div>
<div class="clearfix"></div>
<div class="content">
<ul class="breadcrumb">
<li>
<p>YOU ARE HERE</p>
</li>
<li><a href="#" class="active">Tables</a>
</li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
<h3>Basic - <span class="semi-bold">Tables</span></h3>
</div>
<div class="row">
<div class="col-md-12">
<div class="grid simple ">
<div class="grid-title no-border">
<h4>Table <span class="semi-bold">Styles</span></h4>
<div class="tools"> <a href="javascript:;" class="collapse"></a>
<a href="#grid-config" data-toggle="modal" class="config"></a>
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div>
</div>
<div class="grid-body no-border">
<h3>Basic <span class="semi-bold">Table</span></h3>
<table class="table no-more-tables">
<thead>
<tr>
 <th style="width:1%">
<div class="checkbox check-default">
<input id="checkbox10" type="checkbox" value="1" class="checkall">
<label for="checkbox10"></label>
</div>
</th>
<th style="width:9%">Project Name</th>
<th style="width:22%">Description</th>
<th style="width:6%">Price</th>
<th style="width:10%">Progress</th>
</tr>
</thead>
<tbody>
<tr>
<td class="v-align-middle">
<div class="checkbox check-default">
<input id="checkbox11" type="checkbox" value="1">
<label for="checkbox11"></label>
</div>
</td>
<td class="v-align-middle">Early Bird</td>
<td class="v-align-middle"><span class="muted">Redesign project template</span>
</td>
<td><span class="muted">$4,500</span>
</td>
<td class="v-align-middle">
<div class="progress">
<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox12" type="checkbox" value="1">
<label for="checkbox12"></label>
</div>
</td>
<td><div class="inline">Angry Birds</div> <span class="label label-important">ALERT!</span>
</td>
<td><span class="muted">Something goes here</span>
</td>
<td><span class="muted">$9,000</span>
</td>
<td>
<div class="progress">
<div data-percentage="10%" class="progress-bar progress-bar-danger animate-progress-bar"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox13" type="checkbox" value="1">
<label for="checkbox13"></label>
</div>
</td>
<td>PHP Login page</td>
<td class="v-align-middle"><span class="muted">A project in business and science is typically defined</span>
 </td>
<td><span class="muted">$5,400</span>
</td>
<td>
<div class="progress">
<div data-percentage="65%" class="progress-bar progress-bar-info animate-progress-bar"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox14" type="checkbox" value="1">
<label for="checkbox14"></label>
</div>
</td>
<td>Zombies</td>
<td class="v-align-middle"><span class="muted">frequently involving research or design</span>
</td>
<td><span class="muted">$6,000</span>
</td>
<td>
<div class="progress ">
<div data-percentage="42%" class="progress-bar progress-bar-warning animate-progress-bar"></div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="row">
<div class="col-md-12">
<div class="grid simple ">
<div class="grid-title no-border">
<h4>Table <span class="semi-bold">Styles</span></h4>
<div class="tools"> <a href="javascript:;" class="collapse"></a>
<a href="#grid-config" data-toggle="modal" class="config"></a>
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div>
</div>
<div class="grid-body no-border">
<h3>Stripped <span class="semi-bold">Table</span></h3>
<p>They (allegedly) aid usability in reading tabular data by offering the user a coloured means of separating and differentiating rows from one another.
Simply add the class<code>.table-striped</code>
</p>
<br>
<table class="table table-striped table-flip-scroll cf">
<thead class="cf">
<tr>
<th>
<div class="checkbox check-default ">
<input id="checkbox1" type="checkbox" value="1" class="checkall">
<label for="checkbox1"></label>
</div>
</th>
<th>First Name</th>
 <th>Last Name</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox2" type="checkbox" value="1">
<label for="checkbox2"></label>
</div>
</td>
<td>Mark</td>
<td>Otto</td>
<td> <span class="label label-important">ALERT!</span>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox3" type="checkbox" value="1">
<label for="checkbox3"></label>
</div>
</td>
<td><div class="inline">Jacob </div><span class="label label-important">ALERT!</span>
</td>
<td>Thornton</td>
<td><span class="label label-success">WORK</span>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox4" type="checkbox" value="1">
<label for="checkbox4"></label>
</div>
</td>
<td>Larry</td>
<td>the Bird</td>
<td><span class="label label-important">ALERT!</span>
</td>
</tr>
</tbody>
</table>
<br>
<h3>Hover <span class="semi-bold">Table</span></h3>
<p>Hover tables is addition option that allows you to see what row you selected, this helps to see all the columns in that row. Use the following class to toggle this option
<code>.table-hover</code>
</p>
<br>
<table class="table table-hover no-more-tables">
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Username</th>
</tr>
</thead>
<tbody>
 <tr>
<td>1</td>
<td>Mark</td>
<td>Otto</td>
<td>@mdo</td>
</tr>
<tr>
<td>2</td>
<td>Jacob</td>
<td>Thornton</td>
<td>@fat</td>
</tr>
<tr>
<td>3</td>
<td colspan="2">Larry the Bird</td>
<td>@twitter</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6">
<div class="row">
<div class="col-md-12">
<div class="grid simple ">
<div class="grid-title no-border">
<h4>Table <span class="semi-bold">Styles</span></h4>
<div class="tools"> <a href="javascript:;" class="collapse"></a>
<a href="#grid-config" data-toggle="modal" class="config"></a>
<a href="javascript:;" class="reload"></a>
<a href="javascript:;" class="remove"></a>
</div>
</div>
<div class="grid-body no-border">
<h3>Bordered <span class="semi-bold">Table</span></h3>
<p>
Old is gold, here is old fashion bordered table, we tweaked it a bit so that the headings looks more prominent.
As shown in all of the examples these tables are made to handle extra elements like small buttons, labels and even charts in it.
By using the class <code>.table-bordered</code>. You can mix all the above mention classes to bring a unique table design
</p>
<br>
<table class="table table-bordered no-more-tables">
<thead>
<tr>
<th style="width:1%">
<div class="checkbox check-default">
<input id="checkbox20" type="checkbox" value="1" class="checkall">
<label for="checkbox20"></label>
</div>
</th>
<th class="text-center" style="width:12%">Month</th>
<th class="text-center" style="width:22%">Sales</th>
<th class="text-center" style="width:6%">Graph</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox21" type="checkbox" value="1">
<label for="checkbox21"></label>
</div>
</td>
<td class="text-center">January</td>
<td class="text-right">$ 50,000.00</td>
<td class="text-center">
<div class="customer-sparkline" data-sparkline-color="#0aa699" data-sparkline-type="bar"></div>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox22" type="checkbox" value="1">
<label for="checkbox22"></label>
</div>
</td>
<td class="text-center">February</td>
<td class="text-right">$ 10,000.00</td>
<td class="text-center">
<div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#f35958"></div>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox23" type="checkbox" value="1">
<label for="checkbox23"></label>
</div>
</td>
<td class="text-center">March</td>
<td class="text-right">$ 85,000.00</td>
<td class="text-center">
<div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0090d9"></div>
</td>
</tr>
<tr>
<td>
 <div class="checkbox check-default">
<input id="checkbox24" type="checkbox" value="1">
<label for="checkbox24"></label>
</div>
</td>
<td class="text-center">April</td>
<td class="text-right">$ 56,000.00</td>
<td class="text-center">
<div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#fdd01c"></div>
</td>
</tr>
<tr>
<td>
<div class="checkbox check-default">
<input id="checkbox25" type="checkbox" value="1">
<label for="checkbox25"></label>
</div>
</td>
<td class="text-center">May</td>
<td class="text-right">$ 98,000.00</td>
<td class="text-center">
<div class="customer-sparkline" data-sparkline-type="bar" data-sparkline-color="#0aa699"></div>
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

</div>

<div class="chat-window-wrapper">
<div id="main-chat-wrapper" class="inner-content">
<div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
<div class="chat-header">
<div class="pull-left">
<input type="text" placeholder="search">
</div>
<div class="pull-right">
<a href="#" class><div class="iconset top-settings-dark "></div> </a>
</div>
</div>
<div class="side-widget">
<div class="side-widget-title">group chats</div>
<div class="side-widget-content">
<div id="groups-list">
<ul class="groups">
<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
</ul>
</div>
</div>
</div>
<div class="side-widget fadeIn">
<div class="side-widget-title">favourites</div>
<div id="favourites-list">
<div class="side-widget-content">
<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
 <span class="badge badge-important">3</span>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/c.jpg" alt data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="side-widget">
<div class="side-widget-title">more friends</div>
<div class="side-widget-content" id="friends-list">
<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/h.jpg" alt data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
<div class="user-profile">
<img src="assets/img/profiles/c.jpg" alt data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
Jane Smith
</div>
<div class="user-more">
Hello you there?
</div>
</div>
<div class="user-details-status-wrapper">
</div>
<div class="user-details-count-wrapper">
<div class="status-icon green"></div>
</div>
<div class="clearfix"></div>
</div>
<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
<div class="user-profile">
<img src="assets/img/profiles/h.jpg" alt data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="user-name">
David Nester
</div>
<div class="user-more">
Busy, Do not disturb
</div>
</div>
<div class="user-details-status-wrapper">
<div class="clearfix"></div>
</div>
<div class="user-details-count-wrapper">
<div class="status-icon red"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
<div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
<div class="chat-header">
<div class="pull-left">
<input type="text" placeholder="search">
</div>
<div class="pull-right">
<a href="#" class><div class="iconset top-settings-dark "></div> </a>
</div>
</div>
<div class="clearfix"></div>
<div class="chat-messages-header">
<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
</div>
<div class="chat-messages scrollbar-dynamic clearfix">
<div class="inner-scroll-content clearfix">
<div class="sent_time">Yesterday 11:25pm</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
Hello, You there?
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
How was the meeting?
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="user-details-wrapper ">
<div class="user-profile">
<img src="assets/img/profiles/d.jpg" alt data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
</div>
<div class="user-details">
<div class="bubble">
Let me know when you free
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Yesterday 11:25pm</div>
</div>
<div class="sent_time ">Today 11:25pm</div>
<div class="user-details-wrapper pull-right">
<div class="user-details">
<div class="bubble sender">
Let me know when you free
</div>
</div>
<div class="clearfix"></div>
<div class="sent_time off">Sent On Tue, 2:45pm</div>
</div>
</div>
</div>
<div class="chat-input-wrapper" style="display:none">
<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
</div>
<div class="clearfix"></div>
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
</body>
</html>