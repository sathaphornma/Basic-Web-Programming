<?php

echo "<h2>Students' Record</h2>";
    if($_GET){
        echo "<b>GET Method</b><br>";
        echo "Time processed at ".date("H:i, dS F, Y.")."<br>";
        echo "Name: ".$_GET["initial"].".".$_GET["uname"]."<br>";
        echo "ID: ".$_GET["uid"]."<br>";
        echo "School: ".$_GET["uschool"]."<br>";
        echo "Email: ".$_GET["uemail"]."<br>";
    }
    else if($_POST){
        echo "<b>POST Method</b><br>";
        echo "Time processed at ".date("H:i, dS F, Y.")."<br>";
        echo "Name: ".$_POST["initial"].".".$_POST["uname"]."<br>";
        echo "ID: ".$_POST["uid"]."<br>";
        echo "School: ".$_POST["uschool"]."<br>";
        echo "Email: ".$_POST["uemail"]."<br>";
    }
?>