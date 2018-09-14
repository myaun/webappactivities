<?php
	session_start();
    if ( ! isset($_SESSION ["email"]) || strlen($_SESSION ["email"]) < 1  ) {
    	echo "You need to <a href='index.php'>Login</a><br/>";
        die('Name parameter missing');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Marijoy M. Yaun</title>
</head>
<body>
	<h1>Confirm: Deleting Automobiles</h1>
	<form method="post">
		<input type="submit" name="delete" value="Delete">
		<input type="submit" name="cancel" value="Cancel">
	</form>
</body>
</html>
<?php
	require_once "pdo.php";

	if(isset($_POST["delete"])) {
		$sql = "DELETE FROM autos WHERE auto_id = :auto_id";

        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(':auto_id' => $_GET['auto_id']));

        echo "Record deleted...";
    	echo "<script>window.location=['autos.php']</script>";
	}

	if(isset($_POST["cancel"])) {
		echo "Deletion Cancelled";
    	echo "<script>window.location=['autos.php']</script>";
	}
?>