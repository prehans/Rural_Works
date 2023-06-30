<?php 
   session_start();
//    if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) { 
        if (!isset($_SESSION['username'])) {   ?>


<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="level_1/favicon1.png">
	<title>Rural Works</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style1.css">


<!-- <style>
      body {
        background-image: url("https://t4.ftcdn.net/jpg/00/59/85/51/360_F_59855141_rky1XrAyYz1oCajmaFwwQwuZhUZb8atq.jpg");
     
        background-size: cover;
      }
    </style> -->
	<style>
		.navbar {
			background-color: rgb(28, 28, 199);
			position: sticky;
			top: 0;
		  }
		  .nav-link{
			color: black;
		  }
	</style>

</head>
<body>

	  <nav class="navbar navbar-expand-lg ">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#" style="color: black;">Online Job Search</a>
	  
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
			  <a class="nav-link" href="index.php">LogIn <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
			  <a class="nav-link" href="register.html">SignUp</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="home.html">Home</a>
			  </li>
		  </ul>
		  <form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  </form>
		</div>
	  </nav>

	

      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 80vh">
      	<form class="border shadow p-3 rounded"
      	      action="check-login.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label"><B>Username</B></label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label"><B>Password (only numeric)</B></label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  <button type="submit" class="btn btn-dark">LOGIN</button>
		                      				   		  
				</form>
      </div>
    </script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php }else{
	// header("Location: home.html");
    // header("Location: index.php");
    header("Location: index.php");
    
} ?>
