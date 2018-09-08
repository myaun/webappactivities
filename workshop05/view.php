<?php
require_once "pdo.php";
session_start() ;
    
$ctr=0;
$msg1="";
$msg2="";
if ( isset($_POST['make']) && isset($_POST['year']) 
     && isset($_POST['mileage'])) {
    
    if ($_POST['action']=='Logout'){
        header("location: index.php");
    } 
    else if (empty($_POST['make']) || empty($_POST['year']) || empty($_POST['mileage'])) {
        echo "Make, Year or Mileage is/are required...";    
    }
    else if (isset($_POST['Logout'])) {
        header ("location: /workshop04/index.php");
    }
    else if (!is_numeric ($_POST['year'])) {
        echo "Year must be numeric..."; 
    }
    else if (!is_numeric ($_POST['mileage'])) {
        echo "Mileage must be numeric...";  
    }
    else {
    
        
            $sql = "INSERT INTO autos (make, year, mileage) 
            VALUES ( :make, :year, :mileage)";
    
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':make' => $_POST['make'], 
                ':year' => $_POST['year'],
                ':mileage' => $_POST['mileage']));
            $msg1="Record inserted...";
                    
    }
} 
?>


<html>
    <head>
    <title>Marijoy M. Yaun</title>  
    </head>
    <body>
        <?php
            if ( ! isset($_GET['name']) || strlen($_GET['name']) < 1  ) {
                die('Name parameter missing');
            }
        ?>
        <h1><p>Tracking Autos for </p></h1>
        <?php echo "<h1>" . $_SESSION['email'] . "</h1>";?>
	<p><a href="add.php">Add New</a> | <a href="index.php">Logout</a></p>
    </body>
</html>

