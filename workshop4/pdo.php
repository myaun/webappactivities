<?php
echo "<pre>\n";
try {
    $pdo=new PDO('mysql:host=sql12.freemysqlhosting.net;dbname=sql12254552', 'sql12254552', 'giH8t8tA9t');
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
echo "</pre>\n";?>