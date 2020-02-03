<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "guestbook";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "CREATE TABLE record (
        num INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        initial VARCHAR(30) NOT NULL,
        name VARCHAR(30) NOT NULL,
        id VARCHAR(13) NOT NULL,
        school VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        time VARCHAR(10) NOT NULL
    )";

    $conn->exec($sql);
    echo "<center>Create Table Successfully !!</center>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>