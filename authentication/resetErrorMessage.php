<?php 
  session_start(); //starts the session 
  /*
    Terence Nguyen, Dante Sangoi, Daniel Song
    2/15/2024
    Reset Error Page
    Resets the error message when switching from login to register and vice versa.
  */
  //THE WHOLE POINT OF THIS WEBSITE IS A PHP SCRIPT USED TO RESET THE ERROR MESSAGE AND REDIRECT TO WHEREVER THE $_SESSION['errorResetDestination'] variable wants it to go - Daniel Coded all of this 2/19/2024
  $_SESSION['errorMessage'] = ""; //sets errorMessage variable to nothing 
  $destination = $_SESSION['errorResetDestination']; //sets destination to previously indicated destination 
  if ($destination == "register") { //if destination is register 
    echo '<script>window.location.replace("registration.php");</script>'; //redirect to registration page 
  } else if ($destination == "login") { //if destination is login 
    echo '<script>window.location.replace("login.php");</script>'; //redirect to login page 
  }
?>