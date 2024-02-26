<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/14/2024
  Choose Content for Layout One
  Choosing the content for layout one
-->
<html> <!-- Terence | 2/14/2024 | creation of the form -->
  <head> <!-- Terence | 2/17/2024 | added more inputs to the form -->
    <title> 
      Choose Content
    </title>
    <link rel="icon" href="../../images/dante2.png">
    <link rel="stylesheet" href="formStyle.css">
  </head> <!-- Daniel | 2/17/2024 | added more inputs to the form --> 
  <body>
    <div id="header">
      <h1> Enter Your Content! </h1>
    </div>
    <div id="formContainer">
<!-----------------------------------------------------------------------------------------------------> 
      <form action="processContentLayoutOne.php" method="POST" class="form"> <!-- Collects all website data related to CONTENT --> 
        <div id="title">
          <h2>Title</h2>
          <input type="text" placeholder="Enter Title for your Website" name="title"> 
        </div>
        <div class="container">
          <div class="column">
            <h2>Section One</h2>
            <input type="text" placeholder="Enter Title for Section One" name="sectionOne"> 
            <br>
            <textarea name="sectionOnePara" rows="10" cols="30" placeholder="Enter Description for Section One"></textarea>
            <br>
            <input type="text" placeholder="Enter a URL for an Image" name="image1">
          </div>
          <div class="column">
            <h2>Section Two</h2>
            <input type="text" placeholder="Enter Title for Section Two" name="sectionTwo"> 
            <br>
            <textarea name="sectionTwoPara" rows="10" cols="30" placeholder="Enter Description for Section Two"></textarea>
            <br>
            <input type="text" placeholder="Enter a URL for an Image" name="image2">
          </div>
          <div class="column">
            <h2>Section Three</h2>
            <input type="text" placeholder="Enter Title for Section Three" name="sectionThree"> 
            <br>
            <textarea name="sectionThreePara" rows="10" cols="30" placeholder="Enter Description for Section Three"></textarea>
            <br>
            <input type="text" placeholder="Enter a URL for an Image" name="image3">
          </div>
          <div class="column">
            <h2>Section Four</h2>
            <input type="text" placeholder="Enter Title for Section Four" name="sectionFour"> 
            <br>
            <textarea name="sectionFourPara" rows="10" cols="30" placeholder="Enter Description for Section Four"></textarea>
            <br>
            <input type="text" placeholder="Enter a URL for an Image" name="image4">
          </div>
        </div>
        <br>
        <div id="lucky">
          I'm Feeling Lucky! (randomizes empty boxes)
          <input type="hidden" name="lucky" value="no"> 
          <input type="checkbox" name="lucky" value="yes">
        </div>
        <br>
        <center><input class="submit" type="submit"></center>
      </form>
<!-----------------------------------------------------------------------------------------------------> 
<!-- THIS IS AN EXAMPLE OF DIFFERENT TYPES OF INPUTS ON OUR CONTENT LAYOUT ONE, WE USED BOTH CHECKBOXES, TEXT INPUTS, AND PARAGRAPH INPUTS. WE ALSO WAY EXCEED THE MINIMUM OF TEN QUESTIONS --> 
      
    </div>
    <br>
    <center>Want to Restart? Click <a href="../chooseLayout.php">HERE</a> to redo!</center>
  </body>
</html>