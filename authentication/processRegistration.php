<?php session_start(); ?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/13/2024
  Process Login Page
  This is a page to process the user registration
-->
<html><!-- all HTML and php done by dante *unless otherwise specified* 2/13/2024-->
  <head>
    <title>
      REGISTER
    </title>
    <link rel="icon" href="../images/dante2.png">
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <h1>Registration Processing...</h1>
    <?php //Dante 2/13/2024
      $errorMessage=""; // Terence | 2/14/2024
      $lineData; 
      $imposter=false; 
      $user=preg_replace("/[^a-zA-Z0-9]/", "", $_POST["userName"]);//Dante 2/13/2024 --pregreplace written by daniel
      $pswd=preg_replace("/[^a-zA-Z0-9]/", "", $_POST["userPass"]);//Dante 2/13/2024
      
      // Terence | 2/14/2024
      if (empty($user) || empty($pswd)) {
        $_SESSION['errorMessage'] = "Please fill out all the fields.";
        echo '<script>window.location.replace("registration.php");</script>';
        die;
      }
    
      //PHP from here written by Daniel
      /******************************************************************************************/ 
      $registeredStr = file_get_contents("registeredUsers.txt"); //string containing all registered users in one line
      /******************************************************************************************/ 
      //THIS IS AN EXAMPLE OF US USING FILE_GET_CONTENTS TO GET USER INPUT AND PUT IT INTO A STRING TO BE PROCESSED   
      $registeredArr = explode("\r\n", "$registeredStr"); //explodes the string of registered users as an array containing each line as an element 
      foreach ($registeredArr as $line) { //going through the array of registered users and checking 
        $lineData = explode(",", "$line"); //turn the data in each line into an array of the different elements
        if ($lineData[0]==$user) { //checking if username matches       
          $imposter =true; //sets the imposter variable to true, telling the program that the user is already registered
          break; //breaks out of the for loop, user found. 
        }
      }
      if ($imposter==true) {
        echo $_SESSION['errorMessage'] = "Invalid Login Credentials!"; // Terence | 2/14/2024
        echo '<script>window.location.replace("registration.php");</script>'; // Terence | 2/14/2024
      } else { //END DANIEL PHP
        $infomation="$user,$pswd\r\n";//Dante 2/13/2024           
        /******************************************************************************************/ 
        file_put_contents("registeredUsers.txt", $infomation ,FILE_APPEND);//Dante 2/13/2024 
        /******************************************************************************************/
        //THIS IS AN EXAMPLE OF US USING FILE_PUT_CONTENTS TO ADD A USER OUTPUT INTO OUR REGISTERED USERS FILE 
        echo "REGISTRATION SUCCESSFUL: Welcome to Sangoi Space, $user!";  //Daniel 
      }
      echo "<script>window.location.replace('login.php')</script>"; //after registration is successful, redirects the user to the login page. 
    ?>
  </body>
</html>