<!--
  Terence Nguyen, Dante Sangoi, Daniel Song
  2/23/2024
  Code Snippets
  Contains the code snippets for the requirements
-->
<html>
  <head>
    <title>
      Code Snippets
    </title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../images/dante2.png">
  </head>
  <body>
    <div id="topNav">
      <a href="../index.php" class="btn">Home</a>
      <a href="" class="btn">Snippets</a>
      <a href="../authentication/login.php" class="btn">Login</a>
      <a href="../authentication/registration.php" class="btn special">Register</a>
    </div>
    <div id="header">
      <div id="title">
        <h1 id="top2">CODE</h1>
        <h1 id="indent2">SNIPPETS</h1>
      </div>
      <div id="positionIMG">
        <img id="headImg"src="../images/dante2.png">
      </div>
      <?php // this PHP block randomizes the fun little quote in the beginning 
      // Dante | 2/14/2024
        $random=0;
        $random = rand(0,4);
        $pvzQuotes=["<h2 id='quote'><q>We are about to launch an all out attack on your houze.</q></h2>","<h2 id='quote'><q>Hello, this iz your Muther. Please come over to my house for &quot;Meatloaf&quot; Leave your front door open and your lawn unguarded.</q></h2>","<h2 id='quote'><q>When the Zombies show up, just sit there and dont do anything. You win the game when the Zombies get to your Houze</q></h2>","<h2 id='quote'><q>Hello, We herd you were having a pool party. We think that iz fun. Well be rite over.</q></h2>","<h2 id='quote'><q>Hello, We wood like to visit for a midnight znack. How does ice cream and brains zound?</q></h2>"];//spelling mistakes are intentional 
        echo"$pvzQuotes[$random]";
      ?> 
    </div>
    <br>
    <div class="codeContainer">
      <h2>Selection</h2>
      <br>
      <div class="row">
        <p>
          This if statement is used after the user inputs information about their website content. It will determine if the input box is empty. If it is then it will assign $title to their input and will be stored later.
        </p>
        <img src="selection1.png">
      </div>
      <br>
      <div class="row">
        <p>
          On the extra informations page, the user is allowed to input a website name. This checks if the input box is empty. If it is empty then it sets it to a default name, that being <q>Website Name</q>. If it isn't true, it sets it to the inputted text, which is declared before this if statement.
        </p>
        <img src="selection2.png">
      </div>
      <br>
      <div class="row">
        <p>
          While looping through the registered users file, the temporary variable $lineData[0] contains the username of the line it is currently on. The session variable $_SESSION[<q>username</q>] contains the current users username. If the lineData username is equal to the current user, then it stores it in a global variable, $indexCounter. Then it breaks out of the loop. This is used to find where the users information lies and later to rewrite their information with the content of their website.
        </p>
        <img src="selection3.png">
      </div>
      <br>
      <h2>Repetition</h2>
      <br>
      <div class="row">
        <p>
          This foreach loop goes through every index of the array $registeredArr, which contains all the information about the registered users. It stores each line into the $line variable which is then separated into another array using the explode function. The purpose of this loop is to determine if the inputted username is registered.
        </p>
        <img src="repetition1.png">
      </div>
      <br>
      <h2>Arrays</h2>
      <br>
      <div class="row">
        <p>
          This array is used in conjunction with a custom function and random numbers to generate randomly selected titles. The user has the option to randomize empty text boxes, and this is the random selections for the titles.
        </p>
        <img src="array1.png">
      </div>
      <div class="row">
        <p>
          The 4 arrays here are also used with custom functions and random numbers. Their purpose is to give indexes to the random numbers in order to randomize the users choices.
        </p>
        <img src="array2.png">
      </div>
      <h2>String Functions</h2>
      <div class="row">
        <p>
          The function str_replace() replaces something in a string with something else. This snippet is code inside of a custom function that would automatically replace user inputted commas into the html equivalent. Since the text files are separated using commas, it prevents errors and random indexes.
        </p>
        <img src="string1.png">
      </div>
      <div class="row">
        <p>
          The $registeredUsers variable contains all the information about all the users. The explode function splits the string into an array with the delimiter <q>\r\n</q>. This allows for the use of a foreach loop to check each index of the text file.
        </p>
        <img src="string2.png">
      </div>
      <div class="row">
      <p>
        preg_replace() is used to prevent the user from inputting SQL injections. It removes special characters and replaces it with nothing.
      </p>
      <img src="string3.png">
    </div>
      <br>
      <h2>Custom Functions</h2>
      <br>
      <div class="row">
        <p>
          This function takes the users input and replaces all commas with the html equivalent. This is important because the all the stored data is under a comma separated value file.
        </p>
        <img src="custom1.png">
      </div>
      <div class="row">
        <p>
          This function takes the user's icon choice and returns the path to the image that corresponds to it so it can be inserted into the CSS for the custom website.
        </p>
        <img src="custom2.png">
      </div>
      <div class="row">
        <p>
          This function takes the user's imput for the paragraph position and returns the corresponding string. flex-direction:flexDirection(row); sorts everthing from left to right and flex-direction:flexDirection(reverse-row); sorts everthing from right to left.
        </p>
        <img src="custom3.png">
      </div>
      <div class="row">
        <p>
          This function takes the user's input for whether or not they want their images to have a shadow and returns the CSS code to add the shadow if they chose to.
        </p>
        <img src="custom4.png">
      </div>
    </div>
  </body>
</html>