<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Ads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content name="description" />
    <meta content name="author" />
    <!---http://revox.io/webarch/3.0/html/-->
    <link href="<?= base_url().'assets/admin/' ?>css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/MetroJs.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/admin/' ?>css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/admin/' ?>css/component.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/admin/' ?>css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url().'assets/admin/' ?>css/owl.theme.css" />
    <link href="<?= base_url().'assets/admin/' ?>css/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url().'assets/admin/' ?>css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?= base_url().'assets/admin/' ?>css/rickshaw.css" type="text/css" media="screen">
    <link rel="stylesheet" href="<?= base_url().'assets/admin/' ?>css/mapplic.css" type="text/css" media="screen">
    <link href="<?= base_url().'assets/admin/' ?>css/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/ios7-switch.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?= base_url().'assets/admin/' ?>css/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url().'assets/admin/' ?>css/morris.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url().'assets/admin/' ?>css/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?= base_url().'assets/admin/' ?>css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url().'assets/admin/' ?>css/bootstrap-imageupload.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url().'assets/admin/' ?>css/webarch.css" rel="stylesheet" type="text/css" />
	<style>
	    .user-info-wrapper .user-info .username{
	        margin-top:10px;
	    }
	</style>
<script src="<?= base_url().'assets/admin/' ?>js/jquery-1.11.3.min.js" type="text/javascript"></script>
</head>

<body class>
    <div class="header navbar navbar-inverse ">
        <div class="navbar-inner">
            <div class="header-seperation">
                <ul class="nav pull-left notifcation-center visible-xs visible-sm">
                    <li class="dropdown"><a href="#main-menu" data-webarch="toggle-left-side"><i class="material-icons">menu</i></a></li>
                </ul><a href="<?= base_url('admin/dashboard') ?>"><img src="<?= base_url().'assets/admin/' ?>img/logo.png" class="logo" alt data-src="<?= base_url().'assets/admin/' ?>img/logo11.png" data-src-retina="<?= base_url().'assets/admin/' ?>img/logo2x.png" width="106" height="21"/></a>
                <ul class="nav pull-right notifcation-center">
                    <li class="dropdown hidden-xs hidden-sm"><a href="<?= base_url('admin/dashboard') ?>" class="dropdown-toggle active" data-toggle><i class="material-icons">home</i></a></li>
                </ul>
            </div>
            <div class="header-quick-nav">
                <div class="pull-left">
                    <ul class="nav quick-section">
                        <li class="quicklinks"> <a href="#" class id="layout-condensed-toggle"><i class="material-icons">menu</i></a></li>
                    </ul>
                </div>
                <div id="notification-list" style="display:none">
                    <div style="width:300px">
                        <div class="notification-messages info">
                            <div class="user-profile"><img src="<?= base_url().'assets/admin/' ?>img/profiles/d.jpg" alt data-src="<?= base_url().'assets/admin/' ?>img/profiles/d.jpg" data-src-retina="<?= base_url().'assets/admin/' ?>img/profiles/d2x.jpg" width="35" height="35"></div>
                            <div class="message-wrapper">
                                <div class="heading">David Nester - Commented on your wall</div>
                                <div class="description">Meeting postponed to tomorrow</div>
                                <div class="date pull-left">A min ago</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="notification-messages danger">
                            <div class="iconholder"><i class="icon-warning-sign"></i></div>
                            <div class="message-wrapper">
                                <div class="heading">Server load limited</div>
                                <div class="description">Database server has reached its daily capicity</div>
                                <div class="date pull-left">2 mins ago</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="notification-messages success">
                            <div class="user-profile"><img src="<?= base_url().'assets/admin/' ?>img/profiles/h.jpg" alt data-src="<?= base_url().'assets/admin/' ?>img/profiles/h.jpg" data-src-retina="<?= base_url().'assets/admin/' ?>img/profiles/h2x.jpg" width="35" height="35"></div>
                            <div class="message-wrapper">
                                <div class="heading">You haveve got 150 messages</div>
                                <div class="description">150 newly unread messages in your inbox</div>
                                <div class="date pull-left">An hour ago</div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="chat-toggler sm">
                        <div class="profile-pic"><img src="<?= base_url().'assets/admin/' ?>img/profiles/avatar_small.jpg" alt data-src="<?= base_url().'assets/admin/' ?>img/profiles/avatar_small.jpg" data-src-retina="<?= base_url().'assets/admin/' ?>img/profiles/avatar_small2x.jpg" width="35" height="35" />
                            <div class="availability-bubble online"></div>
                        </div>
                    </div>
                    <ul class="nav quick-section ">
                        <li class="quicklinks"><a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options"><i class="material-icons">tune</i></a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                <li class="divider"></li>
                                <li><a href="<?= base_url("admin/logout") ?>"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a></li>
                                <li><a href="<?= base_url("admin/change_password") ?>"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Change Password</a></li>

                            </ul>
                        </li>
                        <li class="quicklinks"> <span class="h-seperate"></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-container row-fluid">
        <div class="page-sidebar " id="main-menu">
            <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
                <div class="user-info-wrapper sm">
                    <div class="profile-wrapper sm"><img src="<?= base_url().'assets/admin/' ?>img/profiles/avatar.jpg" alt data-src="<?= base_url().'assets/admin/' ?>img/profiles/avatar.jpg" data-src-retina="<?= base_url().'assets/admin/' ?>img/profiles/avatar2x.jpg" width="69" height="69" />
                        <div class="availability-bubble online"></div>
                    </div>
                    <div class="user-info sm">
                        <div class="username"><span class="semi-bold"><!--<?= ucwords($this->session->userdata('name')) ?>-->
                        Ads</span></div>
                        <div class="status"></div>
                    </div>
                </div>
                <p class="menu-title sm"></p>
                <ul> 
                    <li> <a href="javascript:;"> <i class="material-icons">Ads</i> <span class="title">Ads Info</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("user_dashboard/addads") ?>">Add Ads</a> </li>
                             <li> <a href="<?= base_url("user_dashboard/viewads") ?>">View Ads</a> </li>
                        </ul>
                    </li>
					
                    <!-- <li> <a href="javascript:;"> <i class="material-icons">invert_colors</i> <span class="title">User</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/userregistration") ?>">View Registered Users</a> </li>
                        </ul>
                    </li>
					
					<li> <a href="javascript:;"> <i class="material-icons">location_on</i> <span class="title">Locations</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/addlocation") ?>">Add Locations</a> </li>
							 <li> <a href="<?= base_url("admin/viewlocations") ?>">View Locations</a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">subject</i> <span class="title">Subjects</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/addsubjects") ?>">Add Subjects</a> </li>
							 <li> <a href="<?= base_url("admin/viewsubjects") ?>">View Subjects</a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">subject</i> <span class="title">Tutor Category</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/addtutorcategory") ?>">Add Tutor Category</a> </li>
							 <li> <a href="<?= base_url("admin/viewtutorcategory") ?>">View Tutor Category</a> </li>
                             <li> <a href="<?= base_url("admin/addtutorsubcategory") ?>">Add Tutor sub Category</a> </li>
                             <li> <a href="<?= base_url("admin/viewtutorsubcategory") ?>">View Tutor sub Category</a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">subject</i> <span class="title">Courses Category</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/trainercategory") ?>">Add Training Courses</a> </li>
							 <li> <a href="<?= base_url("admin/viewtrainercategory") ?>">View Training Courses</a> </li>
							  <li> <a href="<?= base_url("admin/addtrainersubcategory") ?>">Add Training Sub Courses</a> </li>
							 <li> <a href="<?= base_url("admin/viewtrainersubcategory") ?>">View Training Sub Courses</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:;"> <i class="material-icons">flip</i><span class="title">Courses </span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/virtualtraining") ?>"> Create New  Courses </a> </li>
                            <li> <a href="<?= base_url("admin/viewvirtualtraining") ?>"> View/Edit Courses </a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">flip</i><span class="title"> Online Trainings</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/uploadonlinelesson") ?>"> Create Lesson </a> </li>
                            <li> <a href="<?= base_url("admin/viewonlinelessons") ?>"> View/Edit Lesson </a> </li>
							<li> <a href="<?= base_url("admin/uploadonlinelessontopics") ?>"> Create Topics </a> </li>
                            <li> <a href="<?= base_url("admin/viewonlinelessonstopics") ?>"> View/Edit Topics </a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Articles Section</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?=base_url("admin/")?>createarticle">Create New </a> </li>
                            <li> <a href="<?=base_url("admin/")?>viewarticles">View/Edit Articles</a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Offers</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?=base_url("admin/")?>referandearn">Add Refer And Earn </a> </li>
							<li> <a href="<?=base_url("admin/")?>addpromotional">Add Promotional Offers </a> </li>
							<li> <a href="<?=base_url("admin/")?>viewpromotionals">View Promotional Offers </a> </li>
                        </ul>
                    </li>
					 <li> <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Home Page Banner Images</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?=base_url("admin/")?>homepagebannerimages">Add Banner Images </a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">view_stream</i> <span class="title">Registration Data</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?=base_url("admin/")?>information">View Registration Data </a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:;"> <i class="material-icons">apps</i> <span class="title">Technical Documentation</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/addtechnicaldoccategory") ?>">Technical Document Category</a> </li>
                            <li> <a href="<?= base_url("admin/viewtechnicaldoccategory") ?>">View Technical Document Category</a> </li>
							<li> <a href="<?= base_url("admin/viewuserstechnicaldocument") ?>">View User Technical Document Data</a> </li>
                        </ul>
                    </li>
					<li> <a href="javascript:;"> <i class="material-icons">apps</i> <span class="title">Contact Us</span> <span class=" arrow"></span> </a>
                        <ul class="sub-menu">
                            <li> <a href="<?= base_url("admin/viewcontactusdata") ?>">View Contact Us Data</a> </li>
                           
                        </ul>
                    </li>
                    <li> <a href="<?= base_url("admin/change_password") ?>"> <i class="material-icons">apps</i> <span class="title">Change Password</span> <span class=" arrow"></span> </a>
                        
                    </li> -->
                </ul>
                <div class="clearfix"></div>
            </div>
        </div><a href="#" class="scrollup">Scroll</a>
        <div class="footer-widget">
            <div class="progress transparent progress-small no-radius no-margin">
                <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
            </div>
            <div class="pull-right">
                <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div><a href="<?= base_url("admin/logout")?>"><i class="material-icons">power_settings_new</i></a></div>
        </div>