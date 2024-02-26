<?php session_start(); // allows for use of session variables across the php sites?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/15/2024
  Sangoi Space Layout One
  The user homepage containing the form for the user to customize their own website
-->

<!-- Terence | 2/15/2024 | creating the user's website -->


<?php 
  function flexDirection($a) { // function to set flex direction
    if ($a == "left") { // checks if the user chose left
      return "row"; // if so the flex direction is normal
    }
    else if ($a == "right") { // checks if the user chose right
      return "row-reverse"; // else the flex direction is reversed
    }
  }
  // Terence | 2/21/2024 | function for the colour palettes
  // $palette is the chosen $palette
  // $a is to determine which color is being chosen ie. colour1, colour 2 etc.
  function selectPalette($palette,$a) {
    if ($palette == "palette1") { // Dave's Famous Sauce
      if ($a == 1) {
        return "#52904C";
      }
      else if ($a == 2) {
        return "#467641";
      }
      else if ($a == 3) {
        return "#E6D6C5";
      }
      else if ($a == 4) {
        return "#000000";
      }
    }
    else if ($palette == "palette2") { // Agua du Scallywager
      if ($a == 1) {
        return "#102542";
      }
      else if ($a == 2) {
        return "#1043A2";
      }
      else if ($a == 3) {
        return "#60759B";
      }
      else if ($a == 4) {
        return "#CDD7D6";
      }
    }
    else if ($palette == "palette3") { // Peruvian Baboon (this one is umm... interesting)
      if ($a == 1) {
        return "#B22222";
      }
      else if ($a == 2) {
        return "#FFDB58";
      }
      else if ($a == 3) {
        return "#D2691E";
      }
      else if ($a == 4) {
        return "#311905";
      }
    }
    else if ($palette == "palette4") { // Masculine Scent
      if ($a == 1) {
        return "#FFAFCC";
      }
      else if ($a == 2) {
        return "#FFC8DD";
      }
      else if ($a == 3) {
        return "#EEEEEE";
      }
      else if ($a == 4) {
        return "#7B1313";
      }
    }
    else if ($palette == "palette5") { // Raw Shrimp
      if ($a == 1) {
        return "#E0AFA0";
      }
      else if ($a == 2) {
        return "#463F3A";
      }
      else if ($a == 3) {
        return "#8A817C";
      }
      else if ($a == 4) {
        return "#F4F3EE";
      }
    }
  }

  // Terence | 2/22/2024 | more functions
  // checks if the user wants image drop shadow
  function dropShadow($value) {
    if ($value == "true") { // if yes, returns the code to create the shadow
      return "box-shadow:20px 20px 50px 10px black";
    }
    else if ($value == "false") { // else returns an empty string
      return "";
    }
  }
  // box style function
  // creates borders
  function selectBoxStyle($style,$color) { // dante 2/22/2024
    if ($style == "boxstyle1") { // no borders
      return "";
    }
    else if ($style == "boxstyle2") { // creates a top and bottom border (line separation)
      return "border-bottom:5px solid $color; border-top:5px solid $color";
    }
    else if ($style == "boxstyle3") { // creates a round border
      return "border:5px solid $color;border-radius:1000px";
    }
    else if ($style == "boxstyle4") { // creates a boxed border
      return "border:5px solid $color";
    }
  }
  // font families
  // Terence | 2/22/2024
  // $value is the font they have chosen
  // then returns the string to which the font family is called
  function selectFont($value) {
    if ($value == "font1") {
      return "trebuchet";
    }
    else if ($value == "font2") {
      return "TimesNewRoman";
    }
    else if ($value == "font3") { // comic sans
      return "comicSans";
    }
    else if ($value == "font4") {
      return "courierNew";
    }
    else if ($value == "font5") { // papyrus
      return "papyrus";
    }
    else if ($value == "font6") {
      return "brushScript";
    }
  }
  //select icon
  // Terence | 2/23/2024
  // checks which icon they chose, then uses if statements to check
  // the else if for if they chose random icon
  function selectIcon($value) {
    if ($value == "dante") {
      return "../images/dante.png";
    }
    else if ($value == "alien") {
      return "../images/ailen.png";
    }
    else if ($value == "daniel") {
      return "../images/daniel.png";
    }
    else {
      return $value;
    }
  }

  //ADDED BY DANIEL 2/17/2024 - gathering data from currentwebsite information -->
  // Terence 2/21/2024 | changing it so it gets information from the registeredUsers text file
  // Terence did everything from here down

  $findUser = $_SESSION["username"]; // gets the username to determine who is using the website

  // this block of code gets information from the registered users file to determine the information
  // of their website
  $fileData = file_get_contents("../authentication/registeredUsers.txt");
  $lines = explode("\r\n",$fileData);
  foreach ($lines as $line) {
    $lineData = explode(",", "$line");
    $user = $lineData[0];
    if ($user == $findUser) { // if the user is found
      $currentWebsiteInformation = $line; // sets the information to the line found
      break; // daniel saving my code
    }
  }
  // splits the users information into an array
  $currentWebsiteInformationArray = explode(",",$currentWebsiteInformation);


  // All these variables get the information from the users file
  $title = $currentWebsiteInformationArray[3];

  $subheaderOne = $currentWebsiteInformationArray[4]; 
  $subheaderTwo = $currentWebsiteInformationArray[7];
  $subheaderThree = $currentWebsiteInformationArray[10];
  $subheaderFour = $currentWebsiteInformationArray[13];

  $paragraphOne = $currentWebsiteInformationArray[5];
  $paragraphTwo = $currentWebsiteInformationArray[8];
  $paragraphThree = $currentWebsiteInformationArray[11];
  $paragraphFour = $currentWebsiteInformationArray[14];

  $image1 = $currentWebsiteInformationArray[6];
  $image2 = $currentWebsiteInformationArray[9];
  $image3 = $currentWebsiteInformationArray[12];
  $image4 = $currentWebsiteInformationArray[15];
  
  $headPosition = $currentWebsiteInformationArray[16];
  $contentPosition = $currentWebsiteInformationArray[17];

  $imageDropShadow = $currentWebsiteInformationArray[18];
  $colourPalette = $currentWebsiteInformationArray[19];
  $boxStyle = $currentWebsiteInformationArray[20];
  $font = $currentWebsiteInformationArray[21];
  $websiteName = $currentWebsiteInformationArray[22];
  $icon = $currentWebsiteInformationArray[23];

  // initialize colours using the colour palette
  $colour1 = selectPalette($colourPalette,1); // main color
  $colour2 = selectPalette($colourPalette,2); // secondary color
  $colour3 = selectPalette($colourPalette,3); // tiertiary accents
  $colour4 = selectPalette($colourPalette,4); // used for text

  // calls the functions for the corresponding values to get the users options

  $dropShadow = dropShadow($imageDropShadow); 
  $boxBorder = selectBoxStyle($boxStyle,$colour1);
  $websiteFont = selectFont($font);
  $websiteIcon = selectIcon($icon);


  // Terence | 2/20/2024 | Adding and styling the user website
  // Terence | 2/21/2024 | More styling and refining
  // we should add this to head with images <link rel="icon" href="">


  /*
    The following echo command prints out the webpage with the user's
    chosen website along with all their customizations
  */
  echo "
  <html>
    <head>
      <title>
        $websiteName
      </title>
      <link rel='icon' href='$websiteIcon'>
    </head>
    <body>
      <style>
        html {
          scroll-behavior:smooth;
        }
        body {
          width:100%;
          overflow-x:hidden;
          margin:0;
          background-color:$colour3;
          font-family:$websiteFont;
          color:$colour4;
        }
        @font-face {
          font-family: 'papyrus'; 
          src: url('../fonts/papyrus.ttf'); 
        }
        @font-face {
          font-family: 'trebuchet'; 
          src: url('../fonts/trebuc.woff'); 
        }
        @font-face {
          font-family: 'TimesNewRoman'; 
          src: url('../fonts/timesNewRoman.ttf'); 
        }
        @font-face {
          font-family: 'comicSans'; 
          src: url('../fonts/ComicSansMS3.ttf'); 
        }
        @font-face {
          font-family: 'courierNew'; 
          src: url('../fonts/courierNew.ttf'); 
        }
        @font-face {
          font-family: 'brushScript'; 
          src: url('../fonts/brushScript.ttf'); 
        }
        .sideBar {
          position:fixed;
          width:15%;
          height:100%;
          top:0;
          left:0;
          background-color:$colour2;
          display:flex;
          justify-content:start;
          align-items:center;
          flex-direction:column;
          gap:2%;
          text-align:center;
          z-index:10;
          overflow-x:hidden;
        }
        .sideBar a {
          text-decoration:none;
          color:$colour4;
          font-size:20px;
          transition: scale 0.2s, background-color 0.2s;
          display:block;
          width:100%;
          height:5%;
          display:flex;
          align-items:center;
          justify-content:center;
        }
        .sideBar a:hover {
          scale:1.1;
          background-color:$colour1;
        }
        #content {
          width:85%;
          position:absolute;
          left:15%;
        }
        #titleContainer {
          overflow-x:hidden;
          display:flex;
          justify-content:center;
          align-items:center;
          height:20%;
          width:100%;
          background-color:$colour1;
          margin:0 0 20px 0;
        }
        #titleContainer {
          font-size:50px;
          color:$colour4;
          text-align:center;
        }
        .subheaders {
          display:block;
          width:60%;
          position:relative;
          left:20%;
          padding:15px;
          $boxBorder;
        }
        .subheaders h2 {
          text-align:$headPosition;
          font-size:40px;
        }
        .innerContent {
          position:relative;
          display:flex;
          justify-content:space-around;
          align-items:center;
          width:60%;
          left:20%;
          flex-direction:flexDirection($contentPosition);
          margin:20px 0 20px 0;
        }
        .innerContent p {
          width:50%;
          font-size:20px;
        }
        .innerContent img {
          $dropShadow;
        }
        #watermark {
          position:fixed;
          right:10px;
          bottom:10px;
          color:rgba(0,0,0,0);
          -webkit-text-stroke: 1px black;
          opacity:0.6;
        }
      </style>
      
      <div class='sideBar'>
      <br>
        <a href='../index.php'>Back to Homepage</a>
        <a href='#'>Go to the Top</a>
        <a href='#section1'>$subheaderOne</a>
        <a href='#section2'>$subheaderTwo</a>
        <a href='#section3'>$subheaderThree</a>
        <a href='#section4'>$subheaderFour</a>
      </div>
      <div id='content'>
        <div id='titleContainer'>
          <h1>$title</h1>
        </div>

        <div id='section1'>
          <div class='subheaders'>
            <h2>$subheaderOne</h2>
          </div>
          <div class='innerContent'>
            <p>$paragraphOne</p>
            <img src='$image1' width='400px'>
          </div>
        </div>

        <div id='section2'>
          <div class='subheaders'>
            <h2>$subheaderTwo</h2>
          </div>
          <div class='innerContent'>
            <p>$paragraphTwo</p>
            <img src='$image2' width='400px'>
          </div>
        </div>

        <div id='section3'>
          <div class='subheaders'>
            <h2>$subheaderThree</h2>
          </div>
          <div class='innerContent'>
            <p>$paragraphThree</p>
            <img src='$image3' width='400px'>
          </div>
        </div>

        <div id='section4'>
          <div class='subheaders'>
            <h2>$subheaderFour</h2>
          </div>
          <div class='innerContent'>
            <p>$paragraphFour</p>
            <img src='$image4' width='400px'>
          </div>
        </div>
      </div>
      <p id='watermark'> Created Using SangoiSpace. To remove this watermark, buy SangoiSpace PREMIUM. </p>
    </body>
  </html>
  ";
  
?>