<?php session_start(); ?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/13/2024
  Process Login Page
  This is the registration page 

SOME FUNCTION THAT TURNS SPECIAL CHARACTERS INTO THE HTML COUNTER PARTS
-->
<html><!-- all HTML done by dante 2/13/2024-->
  <head> <!-- Terence | 2/13/2024 | adding html tags and classes to style -->
    <title>
      REGISTER
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
      <h2>REGISTER</h2>
      <form action="processRegistration.php" method="POST" class="form">
        <?php
          $message = $_SESSION["errorMessage"]; //set message to error message Daniel 2/18/2024
          echo "<span id='red'>$message</span>"; //outputs the error message. by default it is nothing. 
        ?>
        <div class="inputBox">
          <i class="fa-solid fa-user" style="color: #ffffff;"></i> <!-- inputs custom icon -->
          <input type="text" name="userName" placeholder="Username">
        </div>
        <div class="inputBox">
          <i class="fa-solid fa-lock" style="color: #ffffff;"></i> <!-- inputs custom icon -->
          <input type="password" name="userPass" placeholder="Password">
        </div>
        <br>
        <input type="submit" value="Register!" class="submitBtn">
      </form>
      <div class="createAcc">
        Already have an account? 
        <?php
          $_SESSION['errorResetDestination'] = "login"; //sets errorResetDestination to login  Daniel 2/18/2024
          echo '<a href="resetErrorMessage.php"><b>Login</b></a>'//takes you to the page to reset your error message 
        ?>
      </div>
    </div>
  </body>
</html>