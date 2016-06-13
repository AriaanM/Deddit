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

	</head>
	<body>
	    <!-- wrapper, to center website -->
	    <div class="wrapper">

	        <!-- logo -->
	        <div class="logo"></div>

	        <!-- navigation -->
		
			<a href="/deddit/index"><h3 class="w3-btn w3-red">Deddit</h3></a>
		<div class="w3-dropdown-hover">
			<a href="<?php echo Config::get('URL'); ?>post/index"><h3 class="w3-btn w3-red">Posts</h3></a>
			<div class="w3-dropdown-content w3-border">
			<a href="#">Old</a>
			<a href="#">New</a>
			<a href="#">Random</a>
			</div>
		</div>
			<a href="<?php echo Config::get('URL'); ?>profile/index"><h3 class="w3-btn w3-red">Profiles</h3></a>
			<div class="w3-dropdown-hover">
			<a href="<?php echo Config::get('URL'); ?>user/index"><h3 class="w3-btn w3-red right">My Account</h3></a>
			<div class="w3-dropdown-content w3-border">
<?php 		 if (!Session::userIsLoggedIn()) : ?>
		    <a href="<?php echo Config::get('URL'); ?>Register/index">Register</a>
		    <a href="<?php echo Config::get('URL'); ?>login/index">Login </a>
<?php 		 endif ;?>
<?php if (Session::userIsLoggedIn()) : ?>
	<?php if (View::checkForActiveController($filename, "user")) ?>
    			<?php if (Session::get("user_account_type") == 7) : ?>
    			 <?php if (View::checkForActiveController($filename, "admin")) { echo ' class="active" ';} ?> 
       				<a href="<?php echo Config::get('URL'); ?>admin/">Admin</a>
       				<a href="<?php echo Config::get('URL'); ?>user/changeUserRole">Change account type</a>	
    				
				<?php endif; ?>
				<a href="<?php echo Config::get('URL'); ?>login/logout">Logout</a>
<?php endif; ?>


        </ul>
	   </ul>
	  </li>
	 </ul>
	</div>
   </div>
  </nav>   