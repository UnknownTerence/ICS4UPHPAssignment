<?php session_start(); // allows use for session variables?>
<!--
  Terence Nguyen, Daniel Song 
  2/21/2024
  Process Extra Information
  This website processes form data from process extra information.php
-->
<?php
  function convertCommas($string) { // Terence | 2/21/2024
    $newString = str_replace(',','&comma;',$string);
    return $newString;
  }
  function randomNumber($a) {
    if ($a == 1) {
      $random=rand(0,1);//drop shadow
      return $random;
    }
    else if ($a == 2) {
      $random=rand(0,4);//colour palette
      return $random;
    }
    else if($a == 3) {
      $random=rand(0,3);//box style
      return $random;
    }
    else if($a == 4) {
      $random=rand(0,5);//font
      return $random;
    }
    else if($a == 5) {
      $random=rand(0,34);//images
      return $random;
    }
  }
  // the arrays below contain all the options for each selection
  $shadowArray=[
    "true","false"
  ];
  $colourArray=[
    "palette1", "palette2", "palette3", "palette4", "palette5"
  ];
  $boxArray=[
    "boxstyle1", "boxstyle2", "boxstyle3", "boxstyle4"
  ];
  $fontArray=[
    "font1", "font2", "font3", "font4", "font5", "font6"
  ];
  $imageArray = [
    "../images/ailen.png","../images/ailenRat.png","../images/ailenTEXT.png","../images/bob.png", "../images/byuntear-react.gif","../images/byuntear-sad.gif","../images/carbon13.png","../images/thesilly.gif", "../images/diamondback.jpg","../images/ethiopia.jpg","../images/bomb.jpg","../images/cleveland.jpeg","../images/fish.jpg","../images/gecko.png","../images/hallucination.png","../images/ILTQq.png","../images/image.png","../images/isaacSays.gif","../images/lethal.jpg","../images/link.png","../images/monkey-dancing.gif","../images/newpfp2.png","../images/noSoup.png","../images/piracyBad.jpg","../images/pirateComputer.jpg","../images/rat-meme.gif","../images/shroomCloud.png","../images/sonic-sega.gif","../images/theodoreAvatar.png","../images/Untitled_Artwork.jpeg","../images/war.gif","../images/zombies.png","../images/bigger.png","../images/video.png","../images/league.png"
  ];
  //Daniel | 2/21/2024
  $currentWebsiteInformation = $_SESSION['websiteInfo']; //sets all current website information into a session variable 
  $data; //creates a variable to store all datafrom extra information
  $dropShadow = $_POST["dropShadow"]; 
  $colorPalette = $_POST["colorPalette"]; 
  $boxStyle = $_POST["boxStyle"]; 
  $font = $_POST["font"];
  $lucky = $_POST["lucky"]; 
  $icon = $_POST["icon"];
  $websiteName = convertCommas(htmlspecialchars($_POST["websiteName"]));
  if (empty($websiteName)) { // sets a default name if the user left the box empty
    $websiteName = "Website Name";
  }

  if ($lucky == "yes") { // randomize each element 
    $dropShadow =$shadowArray[randomNumber(1)];
    $colorPalette = $colourArray[randomNumber(2)];
    $boxStyle = $boxArray[randomNumber(3)];
    $font = $fontArray[randomNumber(4)];
    $icon = $imageArray[randomNumber(5)];
  }
  
  $data = "$dropShadow,$colorPalette,$boxStyle,$font,$websiteName,$icon"; 
  //echo "PRIOR: $currentWebsiteInformation"; //troubleshooting purpose 
  $_SESSION['websiteInfo'] = "$currentWebsiteInformation,$data"; 
  //$currentWebsiteInformation = $_SESSION['websiteInfo']; //troubleshooting purpose
  //Daniel | 2/17/2024
  $userIndex; //this variable is used to store THE LINE WHERE THE CURRENT USER'S INFORMATION IS LOCATED IN THE TEXT FILE
  $indexCounter = 0; //counts indexes in the foreach loop
  $registeredUsers = file_get_contents("../../authentication/registeredUsers.txt"); //this gets all the contents from registeredUsers.txt
  $registeredUsersArray = explode("\r\n",$registeredUsers); //this explodes it into an array, each element containing one line
  foreach ($registeredUsersArray as $line) { //goes through each element/line
    $lineData = explode(",",$line); //turns each line's info into an array
    if ($lineData[0]==$_SESSION['username']) { //checks if the line's username element is equal to the user's username
      $userIndex = $indexCounter; //if so, sets userIndex to the current index counter
      break; //breaks out of the loop
    }
    $indexCounter++; //adds one to indexcounter if username is not found in that particular index
  }


  $registeredUsersArray[$userIndex] = $_SESSION['websiteInfo']; //sets the specific index of the current user to the new website information 
  unlink("../../authentication/registeredUsers.txt"); //unlink deletes the current existing file 
  foreach ($registeredUsersArray as $line) { //goes through registeredUsersArray and goes through it one line at a time
    file_put_contents("../../authentication/registeredUsers.txt","$line\r\n",FILE_APPEND); //appends/adds each line BACK INTO the previously deleted file
  } // It works!!! Look how cool I am. -Daniel 

  //1. go through all the users
  //2. go to the user that is logged in
  //3. append the $_SESSION['websiteInfo'] to their registration line

 echo '<script>window.location.replace("../sangoiSpaceLayoutOne.php");</script>';
 //echo "Appended: $currentWebsiteInformation"; //troubleshooting purpose 
?>