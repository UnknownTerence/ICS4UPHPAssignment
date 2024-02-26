<?php session_start(); ?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/14/2024
  Choose Layout Process
  Processing the information from the chooseLayout.php
-->
<?php
  // Daniel | 2/15/2024 | selection
  // Dante | 2/15/2024 | random number
  // Terence | 2/17/2024 | session variable stuff
  
  $randNum=0;
  $randNum = rand(1,2);

  $user = $_SESSION["username"];
  $pswd = $_SESSION["password"];

  $currentWebsiteInformation = ""; //establishes a variable to contain all the current website information
  
  


  $selection = $_POST["chooseLayout"]; //gets user's layout selection from POST 

  if ($selection=="layout1") {
    $currentWebsiteInformation = "$user,$pswd,1";
    $_SESSION['websiteInfo'] = $currentWebsiteInformation;
    echo '<script>window.location.replace("content/contentLayoutOne.php");</script>'; //go to layout one 
  } else {
    $_SESSION["errorMessage"] = "This is a premium layout. Please obtain SangoiSpace Premium or select Gray Pasta.";
    echo '<script>window.location.replace("../authentication/login.php");</script>'; //go to login page
  }


  
?>