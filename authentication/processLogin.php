<?php session_start(); //THIS STARTS THE SESSION?> 
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/13/2024
  Process Login Page
  This is a page to process the user login 
-->
<html> <!-- All HTML & PHP on this page made by Daniel 2/13/2024 --> 
  <head>
    <title>
      LOGIN
    </title> 
    <link rel="icon" href="../images/dante2.png">
    <link rel="stylesheet" href="../style.css">
  </head>
    <body>
      <?php
        $errorMessage="";
        $userWebsite = false; //added 2.21.2021, checking if user has a website (default value false)
        $userLayout = 0; //this variable indicates that layout the user has previously selected. it will not be used unless the user already has a website
        $lineData; //define the lineData variable so it is available for usage globally 
        $checkPassword = false; //default set the checkPassword variable to false 
        $username = preg_replace("/[^a-zA-Z0-9]/", "", $_POST["userName"]); //preg_replace filters out any non-alpha numeric characters
        $password = preg_replace("/[^a-zA-Z0-9]/", "", $_POST["userPass"]); 
        if (empty($username) || empty($password)) { //if user fails to fill out all the fields for login 
          $_SESSION['errorMessage'] = "Please fill out all the fields."; //sets the error messge to "please fill out all the fields"
          echo '<script>window.location.replace("login.php");</script>'; //redirects to login.php 
          die; //kills the program
        }
        $truePassword; //variable displaying the ACTUAL PASSWORD extracted from registeredUsers.txt
        $registeredStr = file_get_contents("registeredUsers.txt"); //string containing all registered users in one line
        $registeredArr = explode("\r\n", "$registeredStr"); //explodes the registeredStr into an array that contains each line as an element 
/******************************************************************************************/ 
        foreach ($registeredArr as $line) { //going through the array of registered users and checking 
          $lineData = explode(",", "$line"); //turn the data in each line into an array of the different elements
          if ($lineData[0]==$username) { //checking if username matches
            $_SESSION["userWebsiteExists"] = array_key_exists(2, $lineData); //checking if currentUser has information stored in the second index, which theoretically if does indeed have information, should contain the layout number. this can indicate if the user has website information stored.
            if ($_SESSION["userWebsiteExists"]==true) {
              $userLayout = $lineData[2]; //if the user does have a website, collect its layout #
            }
            $truePassword = $lineData[1]; //if username matches, set the "truePassword" variable to the password from database
            $checkPassword=true; //sets the check password variable to true, telling the program to check the password
            break; //breaks out of the for loop, user found. 
          }
        }
/******************************************************************************************/ 
//THIS IS AN EXAMPLE OF REPETITION, WHERE WE USE A FOREACH LOOP TO GO THROUGH REGISTERED USERS AS AN ARRAY 
      
/******************************************************************************************/ 
        if ($checkPassword==true) { //if the username has been found 
          if ($truePassword==$password) { //if the password user has entered is equal to the actual password linked with that username  
            $_SESSION['username'] = $username; 
            $_SESSION['password'] = $password; 
            echo '<script>window.location.replace("../sangoiSpace/sangoiTransition.php");</script>'; //added by daniel 2/22/2024 redirects user to sangoiTransition. welcome to sangoispace!;
            die; //kills the program         
          } else {
            $_SESSION['errorMessage'] = "Invalid Login Credentials!";
            echo '<script>window.location.replace("login.php");</script>'; //added by daniel 2/21/2024 redirects user to login page again if invalid credentials
            die; //kills the program 
          }
        } else {
          echo $_SESSION['errorMessage'] = "Invalid Login Credentials!"; //if $checkPassword = false, this means that the username that the user inputted did not match up with anything. redirect user to login page to input data again. 
          echo '<script>window.location.replace("login.php");</script>';
          die; //kills the program 
        }
/******************************************************************************************/ 
//THIS ENTIRE IF STATEMENT IS AN EXAMPLE OF SELECTION, IT IS DOING DIFFERENT THINGS BASED ON THE STATE OF $CHECKPASSWORD. 
      
      ?>
    </body>
</html>

