<?php

/* 
 * Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 */

	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>




<!DOCTYPE html>
<!--
  Copyright2014 - Anurag Meena (ianuragit@gmail.com)
 -->
<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> 	<html lang="en"> <!--<![endif]-->
<head>

	<!-- General Metas -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	<!-- Force Latest IE rendering engine -->
	<title>Trestor</title>
	<meta name="description" content="Voting app for Trestor foundation">
	<meta name="author" content="Trestor foundation-Anurag Meena">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css_login/base.css">
	<link rel="stylesheet" href="css_login/skeleton.css">
	<link rel="stylesheet" href="css_login/layout.css">
	
</head> 
<body>

	



	<!-- Primary Page Layout -->

	<div class="container">
		
		<div class="form-bg">
			<form name="loginform" action="login_exec.php" method="post">
				<h2>Trestor Voting Login</h2>
				<p><input name="username" type="text" placeholder="Username"></p>
				<p><input name="password" type="password" placeholder="Password"></p>
				<label for="remember">
<!--				  <input type="checkbox" id="remember" value="remember" />
				  <span>Remember me on this computer</span>-->
				</label>
				<button type="submit"></button>
			</form>
		</div>

                <p class="forgot">2014 &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp <a href="www.trestor.org">Trestor Foundation</a></p>
<!--		<p class="forgot">Forgot your password? <a href="">Click here to reset it.</a></p>-->


	</div><!-- container -->

	<!-- JS  -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.5.1.min.js'>\x3C/script>")</script>
	<script src="js/app.js"></script>
	
<!-- End Document -->
</body>
</html>
