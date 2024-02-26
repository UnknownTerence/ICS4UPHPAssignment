<?php session_start(); //MUST USE SESSION START IN ORDER TO ACCESS THE SESSION ARRAY ?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/14/2024
  Process Content of Layout One 
  This website processes the form results of contentLayoutOne 
-->
<?php // Terence | 2/14/2024
  // Terence | 2/17/2024 | processing for the necessary inputs and lucky stuff
  // Dante | 2/17/2024 | lucky button, randomizing and arrays
  // Terence | 2/20/2024 | fixing up lucky button and debugging
  // Terence | 2/21/2024 | adding convertCommas function to fix inputting commas, changed necessary code, added more paragraphs to randomize

//this function converts regular commas into the html special character for commas to avoid errors happening when reading the user's file
  function convertCommas($string) {
    $newString = str_replace(',','&comma;',$string);
    return $newString;
  }

//depending on the peramater this function generates a random number that will be used to get a random index from the arrays
  function randomNumber($a) {
    if ($a == 1) {//titles
      $random=rand(0,15);//generates a random number from 0 to 15
      return $random;
    }
    else if ($a == 2) {//paragraphs
      $random=rand(0,11);//generates a random number from 0 to 11
      return $random;
    }
    else if($a == 3) {//images
      $random=rand(0,34);//generates a random number from 0 to 34
      return $random;
    }
  }
/******************************************************************************************/ 
  $titleArray = [// this array contains all possible titles and subheaders
    "BALLS","RAT","BAN-BAN-BANANA", "Lock n' Loaded!", "The Letter E", "FACTS", "Yuho Treâ to Meyægege?", "The Future of Artificial Intelligence", "Exploring the Depths of the Ocean", "Sustainable Living Practices","Heghoem&comma; Uhgaé Leöbyáb.","Look Behind You","They Are Coming","Run","I'm in Your Walls","The Voices"
  ];
  $paragraphArray = [//this array contains all possible paragraphs
    "As the sun sets over the horizon&comma; painting the sky in hues of orange and pink&comma; birds soar overhead&comma; their wings catching the last rays of daylight. In the distance&comma; waves crash against the shore&comma; a rhythmic melody that soothes the soul. Darkness falls&comma; the stars emerge&comma; twinkling like diamonds in the night sky.",
    "Deep in the heart of the forest&comma; ancient trees stand tall and proud. Shafts of sunlight filter through the canopy&comma; illuminating the forest floor below. Birds chirp and insects hum&comma; creating a symphony of natural sounds. Moss-covered rocks and fallen logs provide shelter for small creatures&comma; hidden from sight.",
    "City streets bustle with activity&comma; people go about their daily lives. Cars honk and sirens wail&comma; a constant soundtrack to urban living. Neon signs flash overhead&comma; casting an otherworldly glow on the sidewalks below. Amidst the chaos&comma; individuals hurry along&comma; each lost in their own thoughts and dreams.",
    "High in the mountains&comma; the air is crisp and clean. Snow-capped peaks stretch as far as the eye can see&comma; majestic and untamed. Alpine flowers bloom in brilliant hues&comma; dotting the landscape with splashes of color. Eagles soar overhead&comma; their keen eyes scanning the terrain below for prey.",
    "The vast expanse of the cosmos stretches before us&comma; an endless sea of stars twinkling in the darkness. Galaxies spiral and collide&comma; creating breathtaking displays of cosmic beauty. In the midst of this vastness&comma; our tiny planet Earth spins silently&comma; a fragile oasis in the vastness of space.",
    "Deep in the heart of the jungle&comma; life thrives in abundance. Exotic birds with vibrant plumage flit between towering trees&comma; their calls echoing through the dense foliage. In the shadows&comma; elusive big cats stalk their prey&comma; their golden eyes gleaming with predatory intensity.",
    "Amidst the rolling hills of Tuscany&comma; vineyards stretch as far as the eye can see&comma; their neat rows of grapevines basking in the warm Italian sun. Olive groves dot the landscape&comma; their silvery leaves shimmering in the gentle breeze. In this idyllic setting&comma; time seems to slow down&comma; allowing visitors to savor the simple pleasures of life.",
    "Beneath the waves&comma; a colorful world teeming with life awaits. Coral reefs sway gently in the current&comma; their intricate formations providing shelter for a dazzling array of marine creatures. Schools of fish dart in and out of crevices&comma; their scales catching the sunlight in a mesmerizing display of color.",
    "In the heart of the desert&comma; sand dunes stretch to the horizon&comma; their golden peaks shifting and changing with the whims of the wind. Despite the harsh conditions&comma; life finds a way to thrive here. Cacti stand tall and proud&comma; their spiny arms reaching towards the sky&comma; while desert foxes prowl the sands in search of prey.",
    "As the first light of dawn breaks over the horizon&comma; a new day dawns in the bustling metropolis. Streets come alive with the hustle and bustle of commuters making their way to work&comma; while vendors set up their stalls in colorful markets. In the midst of the chaos&comma; the city pulses with energy and life&comma; a testament to the resilience of the human spirit.",
    "Nestled in the foothills of the Himalayas&comma; a tranquil monastery provides refuge from the chaos of the outside world. Monks clad in saffron robes move gracefully through the courtyards&comma; their chants echoing softly in the crisp mountain air. Here&comma; amidst the serenity of the mountains&comma; seekers find solace and inner peace.",
    "In the annals of myth and legend&comma; there exists a figure whose name reverberates through the corridors of time like an ancient hymn sung by the cosmos itself. Known only as the Wanderer&comma; this enigmatic being strides across the tapestry of existence with a quiet grace that belies the magnitude of their deeds. Legends speak of the Wanderer as a solitary soul&comma; bound neither by the constraints of mortal flesh nor the whims of fate. With eyes that hold the wisdom of eons and a heart as vast as the universe&comma; they traverse realms unseen by ordinary mortals&comma; offering guidance to those lost in the labyrinth of life's uncertainties. Some whisper that the Wanderer is but a manifestation of the collective yearning for enlightenment&comma; while others claim they are an immortal guardian&comma; forever vigilant against the encroaching shadows of chaos. Yet&comma; regardless of the myriad tales spun about them&comma; one truth remains immutable: the Wanderer endures as a beacon of hope in a world where legends fade and heroes are forgotten."
  ];
  $imageArray = [//this array contains the path to all the possible images
    "../images/ailen.png","../images/ailenRat.png","../images/ailenTEXT.png","../images/bob.png", "../images/byuntear-react.gif","../images/byuntear-sad.gif","../images/carbon13.png","../images/thesilly.gif", "../images/diamondback.jpg","../images/ethiopia.jpg","../images/bomb.jpg","../images/cleveland.jpeg","../images/fish.jpg","../images/gecko.png","../images/hallucination.png","../images/ILTQq.png","../images/image.png","../images/isaacSays.gif","../images/lethal.jpg","../images/link.png","../images/monkey-dancing.gif","../images/newpfp2.png","../images/noSoup.png","../images/piracyBad.jpg","../images/pirateComputer.jpg","../images/rat-meme.gif","../images/shroomCloud.png","../images/sonic-sega.gif","../images/theodoreAvatar.png","../images/Untitled_Artwork.jpeg","../images/war.gif","../images/zombies.png","../images/bigger.png","../images/video.png","../images/league.png"
  ];
/******************************************************************************************/ 
//THESE ARE ALL EXAMPLES OF US CREATING ARRAYS AND USING THEM IN A MEANINGFUL MANNER 
  $lucky = $_POST["lucky"];
//converts commas in the user's input for the title, subheaders, paragraphs and image links
  $usertitle = convertCommas(htmlspecialchars($_POST["title"]));
  $usersubheaderOne = convertCommas(htmlspecialchars($_POST["sectionOne"]));
  $usersubheaderTwo = convertCommas(htmlspecialchars($_POST["sectionTwo"]));
  $usersubheaderThree = convertCommas(htmlspecialchars($_POST["sectionThree"]));
  $usersubheaderFour = convertCommas(htmlspecialchars($_POST["sectionFour"]));

  $userparagraphOne = convertCommas(htmlspecialchars($_POST["sectionOnePara"]));
  $userparagraphTwo = convertCommas(htmlspecialchars($_POST["sectionTwoPara"]));
  $userparagraphThree = convertCommas(htmlspecialchars($_POST["sectionThreePara"]));
  $userparagraphFour = convertCommas(htmlspecialchars($_POST["sectionFourPara"]));

  $userimage1 = convertCommas(htmlspecialchars($_POST["image1"]));
  $userimage2 = convertCommas(htmlspecialchars($_POST["image2"]));
  $userimage3 = convertCommas(htmlspecialchars($_POST["image3"]));
  $userimage4 = convertCommas(htmlspecialchars($_POST["image4"]));

//replaces removes \r\n from user paragraphs **********************************************************/ 
  $userparagraphOne = str_replace("\r\n", "",$userparagraphOne); 
  $userparagraphTwo = str_replace("\r\n","",$userparagraphTwo); 
  $userparagraphThree = str_replace("\r\n","",$userparagraphThree); 
  $userparagraphFour = str_replace("\r\n","",$userparagraphFour); 
/******************************************************************************************************/ 
//THIS IS AN EXAMPLE OF A STRING FUNCTION BEING USED IN A MEANINGFUL MANNER

/******************************************************************************************/ 
  //defines official variables - these are all the 'official' values that will be appended to the document. 
  $title = ""; 
  
  $subheaderOne = "";
  $subheaderTwo = "";
  $subheaderThree = "";
  $subheaderFour = "";
  
  $paragraphOne = "";
  $paragraphTwo = "";
  $paragraphThree = "";
  $paragraphFour = "";
  
  $image1 = "";
  $image2 = "";
  $image3 = "";
  $image4 = "";
/******************************************************************************************/ 
//THIS IS AN EXAMPLE OF DEFINING VARIABLES FOR THE FUTURE USED IN A MEANINGFUL MANNER

  if ($lucky == "yes") { // checks if lucky is checked 
    $title = $titleArray[randomNumber(1)];//randomizes each element

    $subheaderOne = $titleArray[randomNumber(1)];
    $subheaderTwo = $titleArray[randomNumber(1)];
    $subheaderThree = $titleArray[randomNumber(1)];
    $subheaderFour = $titleArray[randomNumber(1)];

    $paragraphOne = $paragraphArray[randomNumber(2)];
    $paragraphTwo = $paragraphArray[randomNumber(2)];
    $paragraphThree = $paragraphArray[randomNumber(2)];
    $paragraphFour = $paragraphArray[randomNumber(2)];

    $image1 = $imageArray[randomNumber(3)];
    $image2 = $imageArray[randomNumber(3)];
    $image3 = $imageArray[randomNumber(3)];
    $image4 = $imageArray[randomNumber(3)];
  }
  //THIS COLLECTION OF IF STATEMENTS CHECKS IF THE USER LEFT ANY FIELDS EMPTY. ANY FIELDS THAT ARE NOT EMPTY WILL BE SET TO THE USERS INPUT. 
  if (!empty($usertitle)) {
    $title = $usertitle; 
  } 
  if (!empty($usersubheaderOne)) {
    $subheaderOne = $usersubheaderOne; 
  }
  if (!empty($usersubheaderTwo)) {
    $subheaderTwo = $usersubheaderTwo; 
  }
  if (!empty($usersubheaderThree)) {
    $subheaderThree = $usersubheaderThree;
  }
  if (!empty($usersubheaderFour)) {
    $subheaderFour = $usersubheaderFour;
  }
  if (!empty($userparagraphOne)) {
    $paragraphOne = $userparagraphOne;
  }
  if (!empty($userparagraphTwo)) {
    $paragraphTwo = $userparagraphTwo;
  }
  if (!empty($userparagraphThree)) {
    $paragraphThree = $userparagraphThree;
  }
  if (!empty($userparagraphFour)) {
    $paragraphFour = $userparagraphFour;
  }
  if (!empty($userimage1)) {
    $image1 = $userimage1;
  }
  if (!empty($userimage2)) {
    $image2 = $userimage2;
  }
  if (!empty($userimage3)) {
    $image3 = $userimage3;
  }
  if (!empty($userimage4)) {
    $image4 = $userimage4;
  }

  $data = "$title,$subheaderOne,$paragraphOne,$image1,$subheaderTwo,$paragraphTwo,$image2,$subheaderThree,$paragraphThree,$image3,$subheaderFour,$paragraphFour,$image4"; //contains all information about the website collected here into variable $data

  $currentWebsiteInformation = $_SESSION['websiteInfo']; //gathers current website information
  $_SESSION['websiteInfo'] = "$currentWebsiteInformation,$data"; //appends new website data to current website information
  
  echo '<script>window.location.replace("../position/positionLayoutOne.php");</script>'; //redirects to next stage of sangoispace 

  die; //kills the program 
?>