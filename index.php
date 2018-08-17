<?php

session_start();

if (isset($_SESSION['count'])) {
  $_SESSION['count']++;
}

$message1 = "Welcome to the guessing game machine!<br>Guess a number between 1 and 100.";
if (!isset($_GET["guess"])) {
     $message = "";
          
     $_SESSION['count']=0;
     $_GET["yourGuess"] = rand(1,100);
} else if ($_GET["guess"]=="") {
     $message = "<br>Remarks:<br> Missing guess parameter.";
} else if (!is_numeric($_GET["guess"])) {
     $message = "<br>Remarks:<br> Your guess is not a number.";

} else if ($_GET["guess"] < 0) { //less than 0
    $message = "<br>Remarks:<br> ".$_GET["guess"]." - Your guess is below the boundery which is zero.";
} else if ($_GET["guess"] > 100) { //greater than 100
    $message = "<br>Remarks:<br> ".$_GET["guess"]." - Your guess exceeds the limit which is 100.";
} else if ($_GET["guess"] > $_GET["yourGuess"]) { //greater than
    $message = "<br>Remarks:<br> ".$_GET["guess"]." - Your guess is too high.";

} else if ($_GET["guess"] < $_GET["yourGuess"]) { //less than
    $message = "<br>Remarks:<br> ".$_GET["guess"]." - Your guess is too low.";

} else { // must be equivalent
    $message = "<br>Remarks:<br> Congratulations - You are right!"; 
    $_SESSION['count']=0;    
    $_GET["yourGuess"] = rand(1,100);
}

if (($_SESSION['count'])==3) {
   $message = "<br>Remarks:<br> Sorry - You lose the game. Maximum of three tries only. Try again...";
   $_SESSION['count']=0;
   $_GET["yourGuess"] = rand(1,100);
}
?>

<html>
    <head>
        <title>Marijoy Yaun</title>
    </head>
    <body>
    <center><h1><?php echo "<font color=blue>".$message1."</font>"; ?></h1>
        <form action="" method="GET">
        <p><h2><font color=blue>Make a guess: 
            <input type="text" name="guess">
            <input type="hidden" name="yourGuess"  
                   value="<?php echo $_GET["yourGuess"]; ?>" ></font></h2></p>
        <p><input type="submit" value="Guess" width="48" height="48"/></p></h2><center>
	<center><h2><?php echo "<font color=red>".$message."</font>"; ?></h2>	
        </form>
    </body>
</html>
