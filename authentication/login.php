<?php session_start();?>   
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/13/2024
  Login Page
  This is the login page for Sangoi Space 
-->

<html> <!-- All HTML on this page made by Daniel 2/13/2024 -->
  <head> <!-- Terence | 2/13/2024 | ADDED NECESSARY HTML TAGS AND CLASSES TO STYLE -->
    <title>
      LOGIN
    </title>
    <link rel="icon" href="../images/dante2.png">
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/ec023bb9c6.js" crossorigin="anonymous"></script> <!-- Terence | 2/13/2024 | allows for use of certain icons, <i></i> stuff -->
  </head> 
  <body>
    <div id="topNav">
      <a href="../index.php" class="btn">Home</a>
      <a href="../codeSnippets/index.php" class="btn">Snippets</a>
      <a href="login.php" class="btn">Login</a>
      <a href="registration.php" class="btn special">Register</a>
    </div>
    <div class="formContainer">
      <h2>LOGIN</h2>
      <form action="processLogin.php" method="POST" class="form">
        <?php
          $message = $_SESSION["errorMessage"]; //Daniel added this 2/18/2024 This sets the error message to the error message stored in the session variable 
          echo "<center> <span id='red'>$message</span> </center>"; //Daniel added 2/18/2024 This echos out the error message. By default, the error message is nothing. 
        ?>
        <div class="inputBox"> <!-- FORM USED TO COLLECT LOGIN DATA --> 
          <i class="fa-solid fa-user" style="color: #ffffff;"></i> <!-- inserts a user icon -->
          <input name="userName" type="text" placeholder="Username">
        </div>
        <div class="inputBox">
          <i class="fa-solid fa-lock" style="color: #ffffff;"></i> <!-- inserts a pswd icon -->
          <input name="userPass" type="password" placeholder="Password">
        </div><br>
        <input type="submit" value="Here We Go!" class="submitBtn"> 
      </form>
      <div class="createAcc"> <!-- LINK USED TO REDIRECT USER TO REGISTRATION PAGE --> 
        Don't have an account?
        <?php
          $_SESSION['errorResetDestination'] = "register"; //changes the redirect destination IN CASE THERE IS AN ERROR
          echo '<a href="resetErrorMessage.php"><b>Register</b></a>'; //redirects user to resetErrorMessage.php which resets the error message 
          die; //no need for this page to keep running
        ?>
      </div>
    </div>
  </body>
</html>