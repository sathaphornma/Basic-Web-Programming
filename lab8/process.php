<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="text-center">
        <h2>SATHAPORN MANEEBOON</h2>
        <p>Rajamangala University of Technology Isan, THAILAND</p>
    </div>

    <hr>
    <div class="menu">
        <div class="text-center">
            ::|::<a href="./home.html">Home</a>::|::
            <a href="./office_hour.html">Office Hour</a>::|::
            <a href="./like_dislike.html">Like/Dislike</a>::|::
            <a href="./images.html">Image</a>::|::
            <a href="./links.html">Links</a>::|::
            <a href="./guestbook.html">Guestbook</a>::|::
            <a href="./view_guestbook.php">View Guestbook</a>::|::
        </div>
    </div>
    <hr>
</body>
</html>

<?php

date_default_timezone_set("Asia/Bangkok");
if ($_POST) {
    $initial = $_POST['initial'] ;
    $myName = $_POST['myName'] ;
    $myId = $_POST['myId'] ;
    $school = $_POST['school'] ;
    $myEmail = $_POST['myEmail'];
    $mytime = date("H:i A, d-M-Y");

    $host = "localhost";
    $uname = "root";
    $pwd = "";
    $dbname = "guestbook";  

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO record (initial,name, id,school,email,time)
    VALUES ('$initial','$myName','$myId','$school','$myEmail','$mytime')";
    $conn->exec($sql);
        echo "<center><b>Inserted Successfully</b></center>";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

}

?>  