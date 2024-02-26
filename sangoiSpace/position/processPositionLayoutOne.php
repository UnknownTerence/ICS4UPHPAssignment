<?php session_start(); ?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/14/2024
  Choose Positioning 
  Form to fill in for the user to position the content on the website
-->
<?php // Terence | 2/15/2024
// Terence | 2/20/2024 | added lucky function, code, and debugging
  $headerPosition = "";
  $contentAlignment = "";

  /***********************************************************/
  function randomNumber($a) {
    if ($a == 1) { // values for header position
      $random=rand(0,2); // rng
      return $random; // return output
    }
    else if ($a == 2) { // values for content position
      $random=rand(0,1); // rng
      return $random; // return output
    }
  }
  /***********************************************************/
  //THIS IS AN EXAMPLE OF A CUSTOM FUNCTION WE USED TO RANDOMIZE NUMBERS 

  //this section collects all user data from the form 
  $lucky = $_POST["lucky"]; 
  $headerPosition = $_POST["subheaderPosition"]; 
  $contentAlignment = $_POST["paragraphPosition"];

  //this section provides possibilities for randomization for each option 
  $headerPosArray = [
    "left","center","right"
  ];
  $contentPosArray = [
    "left","right"
  ];

  //if $lucky is true, randomize each element 
  if ($lucky == "yes") {
    $headerPosition = $headerPosArray[randomNumber(1)];
    $contentAlignment = $contentPosArray[randomNumber(2)];
  }

  //collects all collected data into a variable, collects current website data, and appends data to current website data 
  $data = "$headerPosition,$contentAlignment"; //contains all information about the website collected here into variable $data
  $currentWebsiteInformation = $_SESSION['websiteInfo']; //setting currentWebsiteInformation to the current website information
  $_SESSION['websiteInfo'] = "$currentWebsiteInformation,$data"; //appending the current website information with currentWebsiteInformation

  echo '<script>window.location.replace("../extraInformation/extraInformation.php");</script>'; //EDITED BY DANIEL SAT FEB 17
  die; //kills the program 

?>