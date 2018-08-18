<?php
session_start();

    if (!isset($_POST["List1"])) {	
	$_Post["List1"]=" ";
	$yourMove = "";
	$compMove = "";
	$result = "";
	$msg = "Select a move:";
	
    } else {
	
     	$huMove=$_POST["List1"];
	$moves = array ("1" => "Paper",
			"2" => "Rock",
			"3" => "Scissor");
	$random = rand(1,3);

	$compMove = "Computer move is " . $moves["$random"]; 

        if (strcmp($huMove, "Paper")==0)
	   $yourMove = "Your move is ". ($huMove);
	else if (strcmp($huMove, "Rock")==0)
	   $yourMove = "Your move is ". ($huMove);
	else if (strcmp($huMove, "Scissor")==0)
	   $yourMove = "Your move is ". ($huMove);

	if ($moves["$random"] == $huMove) {
	   $result = "Result: It's a tie.";
	} else {
	   if ($moves["$random"] == "Rock")  //computer move is rock
	       if ($huMove == "Scissor") {
	  	 $result = "Result: Computer wins!";
		 
	       }
	       else {
		 $result = "Result: Human wins!";
		 
               }
	      else if ($moves["$random"] == "Paper")  //computer move is paper
	       if ($huMove == "Rock") {
		 $result = "Result: Computer wins!";
		 
	       }
	       else {
		 $result = "Result: Human wins!";		 
	       }
	      else 	//computer move is scissor
	      if ($huMove == "Paper") {
		 $result = "Result: Computer wins!";
		 
	      }
	      else {
		 $result = "Result: Human wins!";		 
	      }	    
	   }	    
    }

?>

<html>
<head>
</head>
<body>

<Form Name="From1" Method="Post" Action="">
<center><p><h1><font color=blue>Select a move: <br/>
<Select Name="List1" Size="3">
<Option Value="Paper">Paper</Option>
<Option Value="Rock">Rock</Option>
<Option Value="Scissor">Scissor</Option><h1/>
</Select> <br/>
<Input Name="S1" Type="Submit" Value="Show">

<center><h3><?php 
    //echo "<font color=blue>".$compScore."</font></br>";
    echo "<font color=red>".$yourMove."</font></br>"; 
    echo "<font color=red>".$compMove."</font></br>"; 
    echo "<font color=red>".$result."</font></br>"; 
?></h3>

</body>
</html>