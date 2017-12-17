<?php
session_start();	
if((isset($_SESSION['username']) != ''))
	{
		header('Location: index.php');
	}
?>

<!DOCTYPE HTML>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="4ww3 project blah blah" />
    <meta name="keywords" content="will,fill,later" />
    <meta name="author" content="Max Vasiliev" />
    <meta name="robots" content="index,follow" />
    <link rel="icon" href="icon.ico" />
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js" ></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"> <!-- google sans-serif font "Ubuntu" -->
    <title>3DFused - Turning Designs Into Objects</title>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".tab").click(function() {
          var X=$(this).attr('id');
          if(X=='login') {
            $("#signup").removeClass('signup');
            $("#login").addClass('signup');
            $("#signupbox").slideUp();
            $("#loginbox").slideDown();
          } else {
            $("#login").removeClass('signup');
            $("#signup").addClass('signup');
            $("#loginbox").slideUp();
            $("#signupbox").slideDown();
          }
        });
      });
    </script>
  </head>
  
  
  <body id="access-page">
    <div id="container">
      <div id="tabbox">
        <a href="#" id="signup" class="tab signup" onclick="hideError();">Sign Up</a>|
        <a href="#" id="login" class="tab login" onclick="hideError();">Login</a>
      </div>
      
      <a id="close-link" href="./index.php">
        <img id="close-button" alt="image of close button" src="close_button.png"> <!-- close button to go back to index page. tried to make this look like a modal, so no header or footer -->
      </a>      
      <div id="panel">
        <div id="loginbox">
          <p class="acc-signupText">Login to 3DFused</p>
          <form name='login' onSubmit="return loginValidation();" action="login-process.php" method="POST">
            <input class="form-input" type="text" name="username" placeholder="Username"> <br>
            <input class="form-input" type="password" name="passid" placeholder="Password"> <br><br>
            <input class="form-input" id="acc-login" type="submit" value="Login" name="submit">
          </form>
        </div>
        <div id="signupbox">
          <p class="acc-signupText">Sign Up for 3DFused</p>
          <form id="register-form" name='registration' onSubmit="return signupValidation();" action="signup-process.php" method="POST"> <!-- sign up forms -->
            <input class="form-input" type="text" name="name" placeholder="Name"> <br>
            <input class="form-input" type="text" name="username" placeholder="Userame"> <br>
            <input class="form-input" type="number" name="age" placeholder="age"> <br>
            <input class="form-input" type="text" name="BirthDay" placeholder="Birthday (yyyy/mm/dd)"><br>
            <input class="form-input" id="email" type="email" name="email" placeholder="Email"> <br>
            <input class="form-input" type="password" name="passid" placeholder="Password"> <br>
            <input class="form-input" id="acc-termsCheck" type="checkbox" name="terms" value="terms"> <label for="acc-termsCheck" id="acc-termsCheckText">I agree with the Terms of Service</label> <br><br>
            <input class="form-input" id="acc-submit" type="submit" value="Sign Up" name="submit">
          </form>
        </div>
      </div>
      
      <div id="errorbox" >
        <p id="errorMsg"></p>
      </div>
      
    </div>
  </body>





<?php echo $_SESSION['username']; ?>  
</html>
