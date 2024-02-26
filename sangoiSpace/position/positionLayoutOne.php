<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/14/2024
  Choose Color Palette
  Form to fill in for the user to style their website
-->
<html> <!-- Terence | 2/14/2024 | creation of the form -->
  <head>
    <title>
      Choose Position Layouts
    </title>
    <link rel="icon" href="../../images/dante2.png">
    <link rel="stylesheet" href="formStyle.css">
  </head>
  <body>
    <h1>Choose Where to Position Your Content</h1>
    <form action="processPositionLayoutOne.php" method="POST" class="form">
      <div class="container">
        <div class="column">
        <h2>Subheader Position</h2>
          <select name="subheaderPosition">
            <option value="left" selected> Left </option>
            <option value="center" > Center </option>
            <option value="right" > Right </option>
          </select>
        </div>
        <div class="column">
          <h2>Paragraph Position</h2>
          <select name="paragraphPosition">
            <option value="left" selected> Left </option>
            <option value="right" > Right </option>
          </select>
        </div>
      </div>
      <br><br>
      <div id="lucky">
        I'm Feeling Lucky! (randomizes all positions)
        <input type="hidden" name="lucky" value="no"> 
        <input type="checkbox" name="lucky" value="yes">
      </div>
      <br>
      <center><input type="submit" class="submit"></center>
    </form>
    <br>
    <center>Want to Restart? Click <a href="../chooseLayout.php">HERE</a> to redo!</center>
  </body>
</html>