<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Video Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;

	}
	nav li
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">

			<h1 style="color: white; font-size: 35px; float: left; padding-top: 45px;">VIDEO LIBRARY MANAGEMENT SYSTEM</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">VIDEO</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">HELPDESK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
								<li><a href="books.php">VIDEO</a></li>
								<li><a href="admin_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">HELPDESK</a></li>
							</ul>
						</nav>
		<?php
		}

		?>


		</header>
		<section>
			<div class="boxvideo">
				<video width="800" height="300" controls>
	  <source src="movie.mp4" type="video/mp4">
	  <source src="movie.ogg" type="video/ogg">
	Your browser does not support the video tag.
	</video>
			</div>
		<div>

			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: right; font-size: 35px; color:black; padding-right: 30px;">WELCOME TO VIDEO LIBRARY</h1><br><br>
        <p style="text-align: right; padding-right: 30px; ">Create a centralized online video library to give your videos an organized and collaborative
home amongst extensive data.</p>


			</div>
		</div>


 <div class="row">
	 <div class="column">
 		<video width="300" height="250" controls>
 		<source src="movie.mp4" type="video/mp4">
 		<source src="movie.ogg" type="video/ogg">
 		Your browser does not support the video tag.
 		</video>
 	</div>



 	<div class="column">
 		<video width="300" height="250" controls>
 		<source src="movie.mp4" type="video/mp4">
 		<source src="movie.ogg" type="video/ogg">
 		Your browser does not support the video tag.
 		</video>
 	</div>



 	<div class="column">
 		<video width="300" height="250" controls>
 		<source src="movie.mp4" type="video/mp4">
 		<source src="movie.ogg" type="video/ogg">
 		Your browser does not support the video tag.
 		</video>
 	</div>
 </div>






		</section>


	</div>
	<?php

		include "footer.php";
	?>
</body>
</html>
