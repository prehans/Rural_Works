<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" href="level_1/favicon1.png">
	<title>Treasure Hunt</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style1.css">


<style>
      body {
        background-image: url("https://t4.ftcdn.net/jpg/00/59/85/51/360_F_59855141_rky1XrAyYz1oCajmaFwwQwuZhUZb8atq.jpg");
     
        background-size: cover;
      }
    </style>


</head>
<body>

<audio id="bg-music" autoplay loop>
  <source src="level_1/got.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>

      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="php/check-login.php" 
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
          <audio id="typing-sound" src="level_1/t1.mp3"></audio>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label"><B>Password (only numeric)</B></label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
           <audio id="password-sound" src="level_1/t1.mp3"></audio>
		  <div class="mb-1">
		    <label class="form-label"><B>Select User Type:</B></label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option selected value="admin">Admin</option>
		  </select>
		 
		  <button type="submit" 
		                       class="btn btn-dark">LOGIN</button>
                  <button type="submit"  class="btn btn-dark">Play Background Music</button>
                  
                  
							   		  
				</form>
      </div>
	  <a href="register.html"><button type="submit" 
		                       class="btn btn-dark btn-lg register" >Register</button></a>
    <audio id="button-sound" src="level_1/t1.mp3"></audio>
    <audio id="register-sound" src="level_1/t1.mp3"></audio>
    
          <script>
         
      let inputField = document.getElementById("username");
      let typingSound = document.getElementById("typing-sound");
      inputField.addEventListener("input", function() {
        typingSound.currentTime = 0;
        typingSound.play();
      });
       let passwordField = document.getElementById("password");
      let passwordSound = document.getElementById("password-sound");
      passwordField.addEventListener("input", function() {
        passwordSound.currentTime = 0;
        passwordSound.play();
      });
      let loginButton = document.getElementById("login-button");
      let buttonSound = document.getElementById("button-sound");
      loginButton.addEventListener("click", function() {
        buttonSound.currentTime = 0;
        buttonSound.play();
      });

      let registerButton = document.getElementById("register-button");
      let registerSound = document.getElementById("register-sound");
      registerButton.addEventListener("click", function() {
        registerSound.currentTime = 0;
        registerSound.play();
      });
    
     
</script>
      

    </script>
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>