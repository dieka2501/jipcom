<!doctype html>
<html class="fixed">
<head>

		<meta charset="UTF-8">

		<title>JSIN Community Admin</title>
		<meta name="author" content="gits.co.id">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/jquery-ui.theme.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/select2.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/select2-bootstrap.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/datatables.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/summernote.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/summernote-bs3.css" />

		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/theme.css" />

		<script src="<?php echo Config::get('app.url');?>assets/js/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<header class="header">
				<div class="logo-container">
					<a href="<?php echo Config::get('app.url');?>" class="logo">
						<img src="<?php echo Config::get('app.url');?>assets/images/logo.jpg" height="45" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<div class="header-right">
			
					<form action="#" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="<?php echo Config::get('app.url');?>assets/images/%21logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/%21logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">Administrator</span>
								<span class="role">JSI Community</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="{{Config::get('app.url')}}public/admin/logout"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="<?php echo Config::get('app.url');?>public/admin">
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/member">
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Master Member</span>
										</a>
									</li>
									<!-- <li>
										<a href="<?php echo Config::get('app.url');?>public/master_member_level">
											<i class="fa fa-gear" aria-hidden="true"></i>
											<span>Master Member Level</span>
										</a>
									</li> -->
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/registration">
											<i class="fa fa-list" aria-hidden="true"></i>
											<span>Member Registration</span>
										</a>
									</li>
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/image">
											<i class="fa fa-tags" aria-hidden="true"></i>
											<span>Image Gallery</span>
										</a>
									</li>
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/video">
											<i class="fa fa-film" aria-hidden="true"></i>
											<span>Video Gallery</span>
										</a>
									</li>
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/newsevents">
											<i class="fa fa-ticket" aria-hidden="true"></i>
											<span>News &amp; Events</span>
										</a>
									</li>
									<!-- <li>
										<a href="<?php echo Config::get('app.url');?>public/configuration">
											<i class="fa fa-motorcycle" aria-hidden="true"></i>
											<span>Configuration</span>
										</a>
									</li> -->
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/group">
											<i class="fa fa-support" aria-hidden="true"></i>
											<span>Group</span>
										</a>
									</li>
									<li>
										<a href="<?php echo Config::get('app.url');?>public/admin/users">
											<i class="fa fa-support" aria-hidden="true"></i>
											<span>Users</span>
										</a>
									</li>
								</ul>
							</nav>
				
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<!-- start content -->
					@yield('content')
					<!-- end content -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/%21sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<script src="<?php echo Config::get('app.url');?>assets/js/jquery.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/jquery-ui.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/bootstrap.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/nanoscroller.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/select2.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/bootstrap-multiselect.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/jquery.maskedinput.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/bootstrap-timepicker.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/summernote.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/bootstrap-maxlength.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/jquery.dataTables.js"></script>	
		<script src="<?php echo Config::get('app.url');?>assets/js/datatables.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/theme.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/theme.init.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/examples.advanced.form.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/examples.datatables.default.js"></script>
	</body>
</html>