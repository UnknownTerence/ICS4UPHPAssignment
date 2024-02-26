<?php session_start(); ?> 
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/22/2024
  Sangoi Space Transition Page 
  After the user is logged in, they will be brought to this page with instructions, etc. 
-->
<html> 
  <head>
    <title>
      Welcome to SangoiSpace
    </title>
    <link rel="icon" href="../images/dante2.png">
  </head>
  <body>
    <!-- DANTE DID THIS 2/14/2024 --> 
    <?php 
      $username = $_SESSION["username"]; 
      echo "<div class='welcome'>Welcome, $username.</div>";
      echo "<div class='fontinator'>";
      echo "<a class='bigger' href='../sangoiSpace/chooseLayout.php'> Go to SangoiSpace </a><br>"; 
      //DANIEL'S CODE FROM HERE 2/21/2021
      if ($_SESSION["userWebsiteExists"]==true) {
        echo "<div class='saved'>Click here to visit your current saved website.";
        echo "<a href='../sangoiSpace/sangoiSpaceLayoutOne.php'> Click here!</a></div>";  
      } else {
        echo "<div class='saved' >You don't have a website yet! Let's get started.</div>";
      }
      echo"</div>";
    ?>
    <!-- Terence | 2/22/2024 | styling -->
    <!-- Dante | 2/22/2024 | styling -->
    <style>
      body {
        width:100%;
        overflow-x:hidden;
        margin:0;
        font-family: Verdana, sans-serif;
        background-color:#577575;
        color:white;
      }
      .welcome {
        display:flex;
        align-items:center;
        justify-content:center;
        height:20%;
        width:100%;
        font-size:80px;
      }
      .fontinator {
        font-size:50px;
      }
      #container {
        position:relative;
        left:5%;
        width:90%;
        overflow:hidden;
        height:20%;
        background-color:#93a9a9;
        outline:5px solid white;
        margin:0 0 20px 0;
      }
      .row {
        width:100%;
        height:100%;
        padding:10px;
        font-size:20px;
      }
      #container2 {
        position:relative;
        left:5%;
        width:90%;
        height:45%;
        display:flex;
        justify-content:space-between;
        align-items:start;
        margin:0 0 -300px 0;
      }
      .column {
        width:18%;
        background-color:#93a9a9;
        padding:10px;
        outline:5px solid white;
        height:100%;
      }
      .column p {
        font-size:20px;
      }
      a {
        text-decoration: none;
        color: #93a9a9; 
        -webkit-text-stroke: 3px white;
        transition: .5s;
        text-shadow: #FFFF 0px 0 10px;
      }
      a:hover{
        letter-spacing:5px;
        scale:1.2;
        text-shadow: #FFFF 0px 0 30px;
      }
      .bigger{
        font-size: 75px;
        width:50%;
        display:block;
        position:relative;
        left:25%;
        text-align:center;
        color:rgba(0,0,0,0);
      }
      .saved{
        font-size:40px;
        text-align:center;
      }
    </style>
    <!-- Daniel | 2/22/2024 | all the text down there -->
<!---------------------------------------------------------------------------------> 
    <br><br>
    <div id="container">
      <div class="row">
        <h2> How to use SangoiSpace</h2>
        <p>
          Welcome to Sangoi Space!!! This is the ultimate website builder that will allow you to create anything you want, to do anything you want!!! Express your greatest dreams and desires!!! Now without further ado, let's talk about how to use Sangoi Space!!
        </p>
      </div>
    </div>
    <div id="container2">
      <div class="column">
        <h3> Step 1: Layout </h3>
        <p>
          First, ya gotta choose your layout! There is ONE default layout option for users on the SangoiSpace FREE plan, but if you purchased SangoiSpace PREMIUM, you have access to 5 of our expertly crafted custom layouts. Pick and choose at your leisure!!
        </p>
      </div>
      <div class="column">
        <h3> Step 2: Contents</h3>
        <p>
          Now this stuff is important!! This is where you will put the CONTENTS of your website. This includes, titles, images, descriptions, headings, ALL THAT JAZZ. Make sure when you put images, you put PROPER image links. You can do this by finding an image on google, right clicking, and clicking 'copy image address.' Then you should be all set! Remember, if you're ever feeling lucky, you've got a button to test your luck!
        </p>
      </div>
      <div class="column">
        <h3> Step 3: Position</h3>
        <p>
          Center? Right? All of the above? (Just kidding, you can't select all of the above). Where do you want your elements to be? This is where you select that. Remember, if you're ever feeling lucky, you've got a button to test your luck!
        </p>
      </div>
      <div class="column">
        <h3> Step 4: Extra Infomation</h3>
        <p>
          You've got the cupcake, you've got the frosting, it is TIME FOR THE SPRINKLES. Now you're gonna add the fun stuff, like any drop shadow, border styles, or icons!!! Also, let's not forget COLOURS AND FONTS. Remember, if you're ever feeling lucky, you've got a button to test your luck!
        </p>
      </div>
      <div class="column">
        <h3> Step 5: Marvel at your Creation!</h3>
        <p>
          Ya did it!!! Your website is now saved to your personal profile once you press 'submit.' Don't worry, if ya want to start from scratch, you can always make a new one! To view your current website, you can access it below down here if you already have one!!!
        </p>
      </div>
    </div>
<!---------------------------------------------------------------------------------> 
<!-- AS YOU CAN SEE, EVERYTHING IS SPELT CORRECTLY AND HAS NO ERRORS--> 
  </body>
</html>