<?php session_start();?>
<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/21/2024
  Extra Information
  Will ask the user for extra information
-->
<html> <!-- Extra Information Form done by Daniel Feb 22 2024 -->
  <head>
    <title>Extra Information</title> 
    <link rel="icon" href="../../images/dante2.png">
    <link rel="stylesheet" href="formStyle.css">
  </head>
  <body>
    <h1> Put in Some Extra Information!</h1>
      <form action="processExtraInformation.php" method="POST"> <!-- Creates a form that will collect extra information -->
        <div class="container"> <!-- contains most of the info for the form -->
          <div class="column"> <!-- creates a column -->
            <h2>Image Drop Shadow</h2>
            <input type="hidden" name="dropShadow" value="false"> <!-- Input that provides default value of drop shadow. The default value of drop shadow is false. --> 
            <input type="checkbox" name="dropShadow" value="true">
            <br>
            <h2> Choose a Color Palette </h2>
            <select name="colorPalette">
              <option selected value="palette1" id="color1">Dave's Famous Sauce</option> <!-- Colour Selection --> 
              <option value="palette2" id="color2">Agua du Scallywager</option>
              <option value="palette3" id="color3">Peruvian Baboon</option>
              <option value="palette4" id="color4">Masculine Scent</option>
              <option value="palette5" id="color5">Raw Shrimp</option>
            </select>
            <br> 
            <h2> Choose a Box Style! </h2>
            <select name="boxStyle">
              <option selected value="boxstyle1">No Boxes</option> <!-- Box Style Selection --> 
              <option value="boxstyle2">Line Separation</option>
              <option value="boxstyle3">Rounded Corners</option>
              <option value="boxstyle4">Normal Corners</option>
            </select>
          </div>
          <div class="column"> <!-- creates another column -->
            <h2> Choose a Font </h2>
            <select name="font"> <!-- Font Selection --> 
              <option selected value="font1" id="font1"> Trebuchet MS </option>
              <option value="font2" id="font2"> Times New Roman </option>
              <option value="font3" id="font3"> Comic Sans MS </option>
              <option value="font4" id="font4"> Courier New </option>
              <option value="font5" id="font5"> Papyrus </option>
              <option value="font6" id="font6"> Brush Script </option>
            </select>
            <br>
            <h2> Choose Your Website Name </h2> <!--Choosing Website Name -->
            <input type="text" name="websiteName">
            <br>
            <h2> Choose Your Website Icon </h2> <!-- Choose Website Icon --> 
            <select name="icon">
              <option selected value="dante"> Dante </option>
              <option value="alien"> Alien </option>
              <option value="daniel"> Daniel </option>
            </select>
          </div>
          <br>
        </div>
        <div id="lucky"> <!-- contains all lucky buttons -->
          I'm Feeling Lucky! (randomizes everything)<!-- I'm Feeling Lucky Button --> 
          <input type="hidden" name="lucky" value="no">
          <input type="checkbox" name="lucky" value="yes">
        </div>
        <br>
        <center><input type="submit" class="submit"></center>
      </form>
  </body>
</html>

<!-- THESE ARE JUST HEX CODES FOR OUR DIFFERENT COLOUR PALETTES
  Dave's Famous Sauce (green)
  --dartmouth-green: #0E5D14;
  --dark-moss-green: #404A23;
  --ecru: #BAB081;
  --moss-green: #8A8E67;

Agua du Scallywager (blue)
  Turquoise: #40E0D0
  Sky Blue: #87CEEB
  Seafoam Green: #98FB98
  Sandy Beige: #F5DEB3

Peruvian Baboon (orange, yellow, red, green)
  Burnt Orange: #D2691E
  Rust Red: #B22222
  Mustard Yellow: #FFDB58
  neutral color: #CBCBCB

Masculine Scent (pink, blue)
  #EEEEEE
  #FFC8DD
  #FFAFCC
  #BDE0FE

Raw Shrimp (monotone with pink)
  #463F3A
  #8A817C
  #F4F3EE
  #E0AFA0

-->