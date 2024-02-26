<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/14/2024
  Sangoi Space Choose Layout
  The user homepage containing the form for the user to customize their own website
-->

<html>
  <head>
    <title>
      Choose Layout
    </title>
    <link rel="icon" href="../images/dante2.png">
    <link rel="stylesheet" href="formStyle.css">
  </head>
  <body>
    <h1> Create a New Website </h1>
    <br>
      <form action="processChooseLayout.php" method="POST">
        <div class='container'>
          <h2> Choose a Layout!!!</h2>
          <br>
          <p>* represents a premium layout</p>
          <div class="column">
            <select name="chooseLayout">
              <option value="layout1">Grey Pasta</option>
              <option value="layout2"> Missisipi Gold *</option> 
              <option value="layout3"> Unexpired Chicken *</option>
              <option value="layout4"> Signature O'Palpatine *</option>
              <option value="layout5"> Nut of the Sea *</option>
            </select> 
          </div>
        </div>
        <br><br>
        <center><input class="submit" type="submit"></center>
      </form>
  </body>
</html>