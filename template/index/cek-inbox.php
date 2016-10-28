<!DOCTYPE html>
<!-- Template Name: Packet - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Packet - Responsive Admin Template</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: GOOGLE FONTS -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<!-- end: GOOGLE FONTS -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../bower_components/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="../../bower_components/flag-icon-css/css/flag-icon.min.css">
		<link rel="stylesheet" href="../../bower_components/animate.css/animate.min.css">
		<link rel="stylesheet" href="../../bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css">
		<link rel="stylesheet" href="../../bower_components/switchery/dist/switchery.min.css">
		<link rel="stylesheet" href="../../bower_components/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css">
		<link rel="stylesheet" href="../../bower_components/ladda/dist/ladda-themeless.min.css">
		<link rel="stylesheet" href="../../bower_components/slick.js/slick/slick.css">
		<link rel="stylesheet" href="../../bower_components/slick.js/slick/slick-theme.css">

		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet CSS -->
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/advanced.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/lyt2-theme-1.css" id="skin_color">
		<link rel="stylesheet" href="assets/css/ariq.css">
		<!-- end: Packet CSS -->
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<!-- end: HEAD -->
	<body>
		<div id="app" class="lyt-2">
			<!-- sidebar -->
			<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">
					<div>
						<!-- start: SEARCH FORM -->
						<div class="search-form hidden-md hidden-lg">
							<a class="s-open" href="#"> <i class="ti-search"></i> </a>
							<form class="navbar-form" role="search">
								<a class="s-remove" href="#" target=".navbar-form"> <i class="ti-close"></i> </a>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Enter search text here...">
									<button class="btn search-button" type="submit">
										<i class="ti-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- end: SEARCH FORM -->
						<!-- start: USER OPTIONS -->
						<div class="nav-user-wrapper">
							<div class="media">
								<div class="media-left">
									<a class="profile-card-photo" href="#"><img alt="" src="assets/images/avatar-1.jpg"></a>
								</div>
								<div class="media-body">
									<span class="media-heading text-white">Peter Clark</span>
									<div class="text-small text-white-transparent">
										UI Designer
									</div>
								</div>
								<div class="media-right media-middle">
									<div class="dropdown">
										<button href class="btn btn-transparent text-white dropdown-toggle" data-toggle="dropdown">
											<i class="fa fa-caret-down"></i>
										</button>
										<ul class="dropdown-menu animated fadeInRight pull-right">
											<li>
												<a href="#"> My Profile </a>
											</li>
											<li>
												<a href="#"> My Calendar </a>
											</li>
											<li>
												<a href="#"> My Messages (3) </a>
											</li>
											<li>
												<a href="#"> Lock Screen </a>
											</li>
											<li class="divider"></li>
											<li>
												<a href="#"> Log Out </a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- end: USER OPTIONS -->
						<?php include 'include/menu.php'; ?>
					</div>
				</div>
			</div>
			<!-- / sidebar -->
			<div class="app-content">
				<!-- start: TOP NAVBAR -->
				<header class="navbar navbar-default navbar-static-top">
					<!-- start: NAVBAR HEADER -->
					<div class="navbar-header">
						<button href="#" class="sidebar-mobile-toggler pull-left btn no-radius hidden-md hidden-lg" class="btn btn-navbar sidebar-toggle" data-toggle-class="app-slide-off" data-toggle-target="#app" data-toggle-click-outside="#sidebar">
							<i class="fa fa-bars"></i>
						</button>
						<a class="navbar-brand" href="index.html"> <img src="assets/images/logo.png" alt="Packet"/> </a>
						<a class="navbar-brand navbar-brand-collapsed" href="index.html"> <img src="assets/images/logo-collapsed.png" alt="" /> </a>

						<button class="btn pull-right menu-toggler visible-xs-block" id="menu-toggler" data-toggle="collapse" href=".navbar-collapse" data-toggle-class="menu-open">
							<i class="fa fa-folder closed-icon"></i><i class="fa fa-folder-open open-icon"></i><small><i class="fa fa-caret-down margin-left-5"></i></small>
						</button>
					</div>
					<!-- end: NAVBAR HEADER -->
					<!-- start: NAVBAR COLLAPSE -->
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-left hidden-sm hidden-xs">
							<li class="sidebar-toggler-wrapper">
								<div>
									<button href="javascript:void(0)" class="btn sidebar-toggler visible-md visible-lg">
										<i class="fa fa-bars"></i>
									</button>
								</div>
							</li>
							<li>
								<a href="#" class="toggle-fullscreen"> <i class="fa fa-expand expand-off"></i><i class="fa fa-compress expand-on"></i></a>
							</li>
							<li>
								<form role="search" class="navbar-form main-search">
									<div class="form-group">
										<input type="text" placeholder="Enter search text here..." class="form-control">
										<button class="btn search-button" type="submit">
											<i class="fa fa-search"></i>
										</button>
									</div>
								</form>
							</li>
						</ul>
						<ul class="nav navbar-right">
							<!-- start: MESSAGES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown"> <span class="badge"> 3 </span> <i class="fa fa-envelope"></i> </a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large animated fadeInUpShort">
									<li>
										<span class="dropdown-header"> Unread messages</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<ul>
												<li class="unread">
													<a href="javascript:;" class="unread">
													<div class="clearfix">
														<div class="thread-image">
															<img src="./assets/images/avatar-2.jpg" alt="">
														</div>
														<div class="thread-content">
															<span class="author">Nicole Bell</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
															<span class="time"> Just Now</span>
														</div>
													</div> </a>
												</li>
												<li>
													<a href="javascript:;" class="unread">
													<div class="clearfix">
														<div class="thread-image">
															<img src="./assets/images/avatar-3.jpg" alt="">
														</div>
														<div class="thread-content">
															<span class="author">Steven Thompson</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
															<span class="time">8 hrs</span>
														</div>
													</div> </a>
												</li>
												<li>
													<a href="javascript:;">
													<div class="clearfix">
														<div class="thread-image">
															<img src="./assets/images/avatar-5.jpg" alt="">
														</div>
														<div class="thread-content">
															<span class="author">Kenneth Ross</span>
															<span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
															<span class="time">14 hrs</span>
														</div>
													</div> </a>
												</li>
											</ul>
										</div>
									</li>
									<li class="view-all">
										<a href="#"> See All </a>
									</li>
								</ul>
							</li>
							<!-- end: MESSAGES DROPDOWN -->
							<!-- start: ACTIVITIES DROPDOWN -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i> </a>
								<ul class="dropdown-menu dropdown-light dropdown-messages dropdown-large animated fadeInUpShort">
									<li>
										<span class="dropdown-header"> You have new notifications</span>
									</li>
									<li>
										<div class="drop-down-wrapper ps-container">
											<div class="list-group no-margin">
												<a class="media list-group-item" href=""> <img class="img-circle" alt="..." src="assets/images/avatar-1.jpg"> <span class="media-body block no-margin"> Use awesome animate.css <small class="block text-grey">10 minutes ago</small> </span> </a>
												<a class="media list-group-item" href=""> <span class="media-body block no-margin"> 1.0 initial released <small class="block text-grey">1 hour ago</small> </span> </a>
											</div>
										</div>
									</li>
									<li class="view-all">
										<a href="#"> See All </a>
									</li>
								</ul>
							</li>
							<!-- end: ACTIVITIES DROPDOWN -->
							<!-- start: LANGUAGE SWITCHER -->
							<li class="dropdown">
								<a href class="dropdown-toggle" data-toggle="dropdown"> <i class="flag-icon flag-icon-us"></i> English </a>
								<ul role="menu" class="dropdown-menu dropdown-light fadeInUpShort">
									<li>
										<a href="#" class="menu-toggler"> Deutsch </a>
									</li>
									<li>
										<a href="#" class="menu-toggler"> English </a>
									</li>
									<li>
										<a href="#" class="menu-toggler"> Italiano </a>
									</li>
								</ul>
							</li>
							<!-- end: LANGUAGE SWITCHER -->
						</ul>
						<!-- start: MENU TOGGLER FOR MOBILE DEVICES -->
						<div class="close-handle visible-xs-block menu-toggler" data-toggle="collapse" href=".navbar-collapse">
							<div class="arrow-left"></div>
							<div class="arrow-right"></div>
						</div>
						<!-- end: MENU TOGGLER FOR MOBILE DEVICES -->
					</div>
					<button class="sidebar-mobile-toggler dropdown-off-sidebar btn hidden-md hidden-lg"  data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</button>
					<button class="dropdown-off-sidebar btn hidden-sm hidden-xs" data-toggle-class="app-offsidebar-open" data-toggle-target="#app" data-toggle-click-outside="#off-sidebar">
						&nbsp;
					</button>
					<!-- end: NAVBAR COLLAPSE -->
				</header>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: BREADCRUMB -->
						<div class="breadcrumb-wrapper">
							<h4 class="mainTitle no-margin"><a href="">< Back To DashBoard</a></h4>
							<ul class="pull-right breadcrumb">
								<li>
									<a href="index.php"><i class="fa fa-home margin-right-5 text-large text-dark"></i>Dashboard</a>
								</li>
								<li>
									Dashboard
								</li>
							</ul>
						</div>
						<!-- end: BREADCRUMB -->
						<!-- start: FIRST SECTION -->

						<div class="container-fluid container-fullw padding-bottom-10">
							<div>
								<h4 class="margin-top-5"><span class="text-bold">Add Your New Email Server</span></h4>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-12">
									<div class="panel panel-white no-radius">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-12">
													<div class="panel panel-white no-radius no-border">
														<div class="panel-heading">
															<div class="col-sm-11">
																<h5 class="over-title margin-bottom-15"><span class="text-bold">Thank You</span></h5>
																<h5 class="over-tittle margin-bottom-15"><span>We Already Send Your Link Verification To Your Email, Please Check It Now! If You Can't Get The Link Please Click
																<a href="#">Resend Link Verification</a></span></h5>
																<button type="button" class="btn btn-wide btn-primary">Back To Email Setting</button>
															</div>
																</div>
														<!-- <div class="panel-body">
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
			<footer>
				<div class="footer-inner">
					<div class="pull-left">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> ClipTheme</span>. <span>All rights reserved</span>
					</div>
					<div class="pull-right">
						<span class="go-top"><i class="ti-angle-up"></i></span>
					</div>
				</div>
			</footer>
			<!-- end: FOOTER -->
			<!-- start: OFF-SIDEBAR -->
			<div id="off-sidebar" class="sidebar">
				<div class="sidebar-wrapper">
					<ul class="nav nav-tabs nav-justified">
						<li class="active">
							<a href="#off-users" aria-controls="off-users" role="tab" data-toggle="tab"> <i class="ti-comments"></i> </a>
						</li>
						<li>
							<a href="#off-favorites" aria-controls="off-favorites" role="tab" data-toggle="tab"> <i class="ti-heart"></i> </a>
						</li>
						<li>
							<a href="#off-settings" aria-controls="off-settings" role="tab" data-toggle="tab"> <i class="ti-settings"></i> </a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="off-users">
							<div id="users" active-class="chat-open">
								<div class="users-list">
									<div class="sidebar-content perfect-scrollbar">
										<h5 class="sidebar-title">On-line</h5>
										<ul class="media-list">
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Nicole Bell</h4>
													<span> Content Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#">
												<div class="user-label">
													<span class="label label-success">3</span>
												</div> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-3.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Steven Thompson</h4>
													<span> Visual Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Ella Patterson</h4>
													<span> Web Editor </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <i class="fa fa-circle status-online"></i> <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Kenneth Ross</h4>
													<span> Senior Designer </span>
												</div> </a>
											</li>
										</ul>
										<h5 class="sidebar-title">Off-line</h5>
										<ul class="media-list">
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Nicole Bell</h4>
													<span> Content Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#">
												<div class="user-label">
													<span class="label label-success">3</span>
												</div> <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Steven Thompson</h4>
													<span> Visual Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-8.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Ella Patterson</h4>
													<span> Web Editor </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-9.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Kenneth Ross</h4>
													<span> Senior Designer </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Ella Patterson</h4>
													<span> Web Editor </span>
												</div> </a>
											</li>
											<li class="media">
												<a data-toggle-class="chat-open" data-toggle-target="#users" href="#"> <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
												<div class="media-body">
													<h4 class="media-heading">Kenneth Ross</h4>
													<span> Senior Designer </span>
												</div> </a>
											</li>
										</ul>
									</div>
								</div>
								<div class="user-chat">
									<div class="chat-content">
										<a class="sidebar-back pull-left" href="#" data-toggle-class="chat-open" data-toggle-target="#users"><i class="ti-angle-left"></i> <span>Back</span></a>
										<div class="sidebar-content perfect-scrollbar">
											<ol class="discussion">
												<li class="messages-date">
													Sunday, Feb 9, 12:58
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															Hi, Nicole
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															How are you?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Hi, i am good
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															Glad to see you ;)
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="messages-date">
													Sunday, Feb 9, 13:10
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															What do you think about my new Dashboard?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="messages-date">
													Sunday, Feb 9, 15:28
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Alo...
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Are you there?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															Hi, i am here
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Your Dashboard is great
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="messages-date">
													Friday, Feb 7, 23:39
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															How does the binding and digesting work in AngularJS?, Peter?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															oh that's your question?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															little reduntant, no?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															literally we get the question daily
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															I know. I, however, am not a nerd, and want to know
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="self">
													<div class="message">
														<div class="message-name">
															Peter Clark
														</div>
														<div class="message-text">
															for this type of question, wouldn't it be better to try Google?
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-1.jpg" alt="">
														</div>
													</div>
												</li>
												<li class="other">
													<div class="message">
														<div class="message-name">
															Nicole Bell
														</div>
														<div class="message-text">
															Lucky for us :)
														</div>
														<div class="message-avatar">
															<img src="assets/images/avatar-2.jpg" alt="">
														</div>
													</div>
												</li>
											</ol>
										</div>
									</div>
									<div class="message-bar">
										<div class="message-inner">
											<a class="link icon-only" href="#"><i class="fa fa-camera"></i></a>
											<div class="message-area">
												<textarea placeholder="Message"></textarea>
											</div>
											<a class="link" href="#"> Send </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="off-favorites">
							<div class="users-list">
								<div class="sidebar-content perfect-scrollbar">
									<h5 class="sidebar-title">Favorites</h5>
									<ul class="media-list">
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-7.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Nicole Bell</h4>
												<span> Content Designer </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#">
											<div class="user-label">
												<span class="label label-success">3</span>
											</div> <img alt="..." src="assets/images/avatar-6.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Steven Thompson</h4>
												<span> Visual Designer </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-10.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-2.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-4.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Ella Patterson</h4>
												<span> Web Editor </span>
											</div> </a>
										</li>
										<li class="media">
											<a href="#"> <img alt="..." src="assets/images/avatar-5.jpg" class="media-object">
											<div class="media-body">
												<h4 class="media-heading">Kenneth Ross</h4>
												<span> Senior Designer </span>
											</div> </a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="off-settings">
							<div class="sidebar-content perfect-scrollbar">
								<h5 class="sidebar-title">General Settings</h5>
								<ul class="media-list">
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" checked />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">Enable Notifications</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">Show your E-mail</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" checked />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">Show Offline Users</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" checked />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">E-mail Alerts</span>
										</div>
									</li>
									<li class="media">
										<div class="padding-10">
											<div class="display-table-cell">
												<input type="checkbox" class="js-switch" />
											</div>
											<span class="display-table-cell vertical-align-middle padding-left-10">SMS Alerts</span>
										</div>
									</li>
								</ul>
								<div class="save-options">
									<button class="btn btn-success">
										<i class="icon-settings"></i><span>Save Changes</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end: OFF-SIDEBAR -->
			<!-- start: SETTINGS -->
			<div class="settings panel panel-default hidden-xs hidden-sm" id="settings">
				<button data-toggle-class="active" data-toggle-target="#settings" class="btn btn-default">
					<i class="fa fa-spin fa-gear"></i>
				</button>
				<div class="panel-heading">
					Style Selector
				</div>
				<div class="panel-body">
					<!-- start: FIXED HEADER -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left"> Fixed header</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-header" />
						</span>
					</div>
					<!-- end: FIXED HEADER -->
					<!-- start: FIXED SIDEBAR -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Fixed sidebar</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-sidebar" />
						</span>
					</div>
					<!-- end: FIXED SIDEBAR -->
					<!-- start: CLOSED SIDEBAR -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Closed sidebar</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="closed-sidebar" />
						</span>
					</div>
					<!-- end: CLOSED SIDEBAR -->
					<!-- start: FIXED FOOTER -->
					<div class="setting-box clearfix">
						<span class="setting-title pull-left">Fixed footer</span>
						<span class="setting-switch pull-right">
							<input type="checkbox" class="js-switch" id="fixed-footer" />
						</span>
					</div>
					<!-- end: FIXED FOOTER -->
					<!-- start: THEME SWITCHER -->
					<div class="colors-row setting-box">
						<div class="color-theme lyt2-theme-1">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt2-theme-1">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
						<div class="color-theme lyt2-theme-2">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt2-theme-2">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
					</div>
					<div class="colors-row setting-box">
						<div class="color-theme lyt2-theme-3">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt2-theme-3">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
						<div class="color-theme lyt2-theme-4">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt2-theme-4">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
					</div>
					<div class="colors-row setting-box">
						<div class="color-theme lyt2-theme-5">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt2-theme-5">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
						<div class="color-theme lyt2-theme-6">
							<div class="color-layout">
								<label>
									<input type="radio" name="setting-theme" value="lyt2-theme-6">
									<span class="fa fa-check-circle lyt-check text-extra-large"></span> <span class="split header"> <span class="color th-header"></span> <span class="color th-collapse"><i class="color-button"></i></span> </span> <span class="split"> <span class="color th-sidebar"><i class="element"></i></span> <span class="color th-body"></span> </span> </label>
							</div>
						</div>
					</div>
					<!-- end: THEME SWITCHER -->
					<div class="panel-footer">
						<button class="btn btn-primary ladda-button btn-squared btn-sm btn-o" data-style="slide-up" data-spinner-size="10" data-spinner-color="#999999" id="reset-layout">
							<span class="ladda-label">Reset</span>
						</button>
						<button class="btn btn-primary ladda-button pull-right btn-squared btn-sm btn-wide" data-style="slide-up" data-spinner-size="10" id="save-layout">
							<span class="ladda-label">Save</span>
						</button>
					</div>
				</div>
			</div>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
		<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="../../bower_components/components-modernizr/modernizr.js"></script>
		<script src="../../bower_components/js-cookie/src/js.cookie.js"></script>
		<script src="../../bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
		<script src="../../bower_components/jquery-fullscreen/jquery.fullscreen-min.js"></script>
		<script src="../../bower_components/switchery/dist/switchery.min.js"></script>
		<script src="../../bower_components/jquery.knobe/dist/jquery.knob.min.js"></script>
		<script src="../../bower_components/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
		<script src="../../bower_components/slick.js/slick/slick.min.js"></script>
		<script src="../../bower_components/jquery-numerator/jquery-numerator.js"></script>
		<script src="../../bower_components/ladda/dist/spin.min.js"></script>
		<script src="../../bower_components/ladda/dist/ladda.min.js"></script>
		<script src="../../bower_components/ladda/dist/ladda.jquery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="../../bower_components/Chart-js/Chart.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: Packet JAVASCRIPTS -->
		<script src="assets/js/letter-icons.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- end: Packet JAVASCRIPTS -->
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/index.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
	</body>
</html>
