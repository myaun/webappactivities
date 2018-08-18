<html>
<head>
<title>Marijoy Yaun</title>
</head>
<body>

<?php
   if (!isset($_POST["username"])) {
	$_POST["username"] = "";
	$_POST["password"] = "";
	$usernamemsg = " ";
   }  else if ($_POST["username"]=="" || $_POST["password"]=="") {
	$usernamemsg = "User name and password are required.";
   }  else if ($_POST["username"]=="myaun" && $_POST["password"]=="myaun") {
	$usernamemsg = "Successful login.";
	  header ("location: prsgamev02.php");
   }  else if ($_POST["username"]!="myaun" || $_POST["password"]!="myaun") {
	$usernamemsg = "Incorrect username or password.";
   } else {
	$usernamemsg = " ";
   }
?>

<form action="" method="post">
   Welcome to Paper-Rock-Scissor Game! <br/><br/>
   Sign In<br/><br/>
   User Name: <input type="text" name="username"><br/><br/>
   Password : <input type="password" name="password"><br/><br/>
   <input type="submit" name="login" value="Log In">
   <input type="reset" name="reset" value="Clear">
   <?php echo "<font color=red>".$usernamemsg."</font>"; ?>
</form>

</body>
</html>