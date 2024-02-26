<?php 
  session_start(); // allows use of session varibles
  $_SESSION["errorMessage"] = ""; // clears the error message
?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/13/2024
  Homepage
  This is the homepage of our ICS4U Unit 1 Project
-->
<html><!-- wrote html, head, title, and body tags - Terence -->
  <head>
    <title>
      SangoiSpace 
    </title>
    <link rel="stylesheet" href="style.css"> <!--links the style page-->
    <link rel="icon" href="images/dante2.png"><!--makes thew-->
  </head>
  <body>

    <!-- Terence | 2/13/2024 -->
    <!-- login and register buttons -->
    <div id="topNav">
      <a href="" class="btn">Home</a>
      <a href="../codeSnippets/index.php" class="btn">Snippets</a>
      <a href="authentication/login.php" class="btn">Login</a>
      <a href="authentication/registration.php" class="btn special">Register</a>
    </div>

    <!-- header section -->
    <div id="header">
      <div id="title">
        <h1 id="top">SANGOI</h1>
        <h1 id="indent">SPACE</h1>
      </div>
      <div id="positionIMG">
        <img id="headImg"src="images/dante2.png">
      </div>
      <?php // this PHP block randomizes the fun little quote in the beginning 
      // Dante | 2/14/2024
        $random=0;
        $random = rand(0,4);
        $pvzQuotes=["<h2 id='quote'><q>We are about to launch an all out attack on your houze.</q></h2>","<h2 id='quote'><q>Hello, this iz your Muther. Please come over to my house for &quot;Meatloaf&quot; Leave your front door open and your lawn unguarded.</q></h2>","<h2 id='quote'><q>When the Zombies show up, just sit there and dont do anything. You win the game when the Zombies get to your Houze</q></h2>","<h2 id='quote'><q>Hello, We herd you were having a pool party. We think that iz fun. Well be rite over.</q></h2>","<h2 id='quote'><q>Hello, We wood like to visit for a midnight znack. How does ice cream and brains zound?</q></h2>"];//spelling mistakes are intentional 
        echo"$pvzQuotes[$random]";
      ?> 
    </div>

    <!-- Terence | 2/14/2024 -->

    <br><!--more infomation about the site-->
    <div id="convincingWords">
      Explore endless possibilities with SangoiSpace!
      <br>
      Limitless customization!
      <br>
      Mind-boggling layouts!
      <br>
      Colors!
      <br>
      Fonts!
      <br>
      <p>
        Introducing the revolutionary site, SangoiSpace! All your dreams can be compiled here at SangoiSpace! What more do you need if you have SangoiSpace?!
      </p>
    </div>
    <h2 class="subhead">The Objective</h2>
    <div id="objective">
      <p>
        Our goal is to reach out to others who desire to make a website but lack the required knowledge to do so. With our new compact design, we have successfully created a project to be proud of. Consisting of text and more text, we introduce you to, SangoiSpace.
      </p>
    </div>
    <!--developers section-->
    <h2 class="subhead">Developers</h2>
    <div id="developers">
      <div class="column">
        <h3>Terence Nguyen</h3>
        <div id="imgContainer">
          <img src="images/avatar.png">
        </div>
        <p>
          Terence Nguyen is a Grade 12 Student who is a male. He did a lot of HTML and CSS for this website. Terence Nguyen is one of the developers of SangoiSpace. Terence Nguyen completed nearly all of the CSS and almost all of the sangoiSpace layouts page, including the processing and selections for it. Terence Nguyen also helped with some debugging while processing forms.
        </p>
      </div>
      <div class="column">
        <h3>Dante Sangoi</h3>
        <img src="images/danteAvatar.png">
        <p>
          Dante Sangoi is a Grade 12 Student who is a male. He did a a little bit of back-end developing for this website. Dante Sangoi is one of the developers of SangoiSpace. Dante Sangoi mostly worked on the randomisation, options for the website to randomise, custom fonts aswell as assisting with various other aspects of the website.
        </p>
      </div>
      <div class="column">
        <h3>Daniel Song</h3>
        <img src="images/danielAvatar.png">
        <p>
          Daniel Song is a Grade 12 Student who is a male. He did a lot of back-end developing for this website. Daniel Song is one of the developers of SangoiSpace. Daniel Song mostly worked on the processing of the forms, including registration, login, and user content selections.
        </p>
      </div>
    </div>
    <br>
    <br>
    <br>
  </body>
</html>