<?php
echo "<pre>\n";
try {
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=misc', 'fred', 'zap');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo "</pre>\n";?>
