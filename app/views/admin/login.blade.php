<!doctype html>
<html class="fixed">
	<head>

		<meta charset="UTF-8">

		<title>Login</title>
		<meta name="author" content="gits.co.id">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/font-awesome.css" />

		<link rel="stylesheet" href="<?php echo Config::get('app.url');?>assets/css/theme.css" />

		<script src="<?php echo Config::get('app.url');?>assets/js/modernizr.js"></script>

	</head>
	<body class="logged">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?php echo Config::get('app.url');?>assets/images/logo_yamaha.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<p id="notip"></p>
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-lock mr-xs"></i> SIGN IN</h2>
					</div>
					<div class="panel-body">
						<form action="<?php echo Config::get('app.url');?>public/login" method="post">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="username" type="text" class="form-control input-lg" required="required" autofocus="autofocus" id='username' />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="pages-recover-password.html" class="pull-right">Forgot Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="password" type="password" class="form-control input-lg" required="required" id='password'/>
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="button" class="btn btn-primary hidden-xs" id='btn-login'>Sign In</button>
									<button type="button" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<script src="<?php echo Config::get('app.url');?>assets/js/jquery.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/jquery-ui.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/bootstrap.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/nanoscroller.js"></script>
		<script src="<?php echo Config::get('app.url');?>assets/js/pace.js"></script>
		<script type="text/javascript">
	      function login(username,password){
	          $.post('<?php echo Config::get("app.url")?>public/admin/login',{
	            'email_login':username,
	            'password':password
	          },function(data){

	            //var json = eval('('+data+')');
	            //alert(json.alert);
	            if(data.login){
	              $('#notip').html(data.alert);
	              $('#notip').css('color',' #e6efc2');
	              $('#notip').css('text-align','center');
	              window.location="<?php echo Config::get('app.url')?>public/admin";
	            }else{
	              $('#notip').html(data.alert).show().fadeOut(5000);
	              $('#notip').css('color','#f4bec0');
	              $('#notip').css('text-align','center');
	              $('#notip').css('font-size','22px');
	            }
	          });
	      }
	      $(document).ready(function(){
	              $(this).ajaxStart(function(){
	                $('#btn-login').html('Loading.......');
	              }).ajaxStop(function(){
	                $('#btn-login').html('Sign In');
	              })
	        });

	      $(document).ready(function(){
	        //alert('aaaa');
	        $('#btn-login').click(function(){
	          var username = $('#username').val();
	          var password = $('#password').val();
	          login(username,password);
	        });
	        $(this).keypress(function(event){
	          if(event.which==13){
	            var username = $('#username').val();
	            var password = $('#password').val();
	            login(username,password); 
	          }
	        });
	      });
	    </script>
	</body>
</html>