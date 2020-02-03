<?php
$host = "localhost";
$uname = "root";
$pwd = "";

try {
    $conn = new PDO("mysql:host=$host", $uname, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE guestbook";
    $conn->exec($sql);
    echo "<center>Database created successfully</center><br>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>