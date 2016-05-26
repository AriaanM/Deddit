<!doctype html>
<html>
<head>
    <title>HUGE</title>
    <!-- META -->
    <meta charset="utf-8">
    <!-- send empty favicon fallback to prevent user's browser hitting the server for lots of favicon requests resulting in 404s -->
    <link rel="icon" href="data:;base64,=">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/style.css" />

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css">
	  
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	  
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</head>
	<body>
	    <!-- wrapper, to center website -->
	    <div class="wrapper">

	        <!-- logo -->
	        <div class="logo"></div>

	        <!-- navigation -->
	        
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">Deddit</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Posts <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">New</a></li>
	            <li><a href="#">Old</a></li>
	          </ul>
	        </li>
	        <li><a href="<?php echo Config::get('URL'); ?>index/index">Home</a></li>
	        <li><a href="<?php echo Config::get('URL'); ?>profile/index">Profiles</a></li>
	        
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
<?php 		 if (!Session::userIsLoggedIn()) : ?>
		        <li><a href="<?php echo Config::get('URL'); ?>Register/index">Register</a></li>
		        <li><a href="<?php echo Config::get('URL'); ?>login/index">Login</a></li>
<?php 		 endif ;?>
	      
	      <li class="dropdown">
	      	<?php if (Session::userIsLoggedIn()) : ?>
            	<li <?php if (View::checkForActiveController($filename, "user")) { echo ' class="active" '; } ?> >
	          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account <span class="caret"></span></a>
	          			<ul class="dropdown-menu">
	            			<li><a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a></li>
	            			<li><a href="<?php echo Config::get('URL'); ?>user/editAvatar">Edit your avatar</a></li>
	            			<li><a href="<?php echo Config::get('URL'); ?>user/editusername">Edit my username</a></li>
	            			<li><a href="<?php echo Config::get('URL'); ?>user/edituseremail">Edit my email</a></li>
	            			<li><a href="<?php echo Config::get('URL'); ?>user/changePassword">Change Password</a></li>
	            			<li><a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a></li>

	            			<?php if (Session::get("user_account_type") == 7) : ?>
                				<li <?php if (View::checkForActiveController($filename, "admin")) { echo ' class="active" ';} ?> >
                   				<a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
                				</li>
            				<?php endif; ?>
        	<?php endif; ?>
        </ul>
	   </ul>
	  </li>
	 </ul>
	</div>
   </div>
  </nav>   