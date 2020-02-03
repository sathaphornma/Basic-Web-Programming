<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>View Guestbook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<?php
$host = "localhost";
$uname = "root";
$pwd = "";
$dbname = "guestbook";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $uname, $pwd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM record");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    //print_r($result);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
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
    <center>
    <table border="1" width="80%" >
        <tr bgcolor="skyblue">
            <th>initial</th>
            <th>name</th>
            <th>id</th>
            <th>school</th>
            <th>email</th>
            <th>time</th>
        </tr >
        <?php foreach($result as $k=>$v) { ?>
            <tr align="center">
                <td><?php echo $v['initial'] ?></td>
                <td><?php echo $v['name'] ?></td>
                <td><?php echo $v['id'] ?></td>
                <td><?php echo $v['school'] ?></td>
                <td><?php echo $v['email'] ?></td>
                <td><?php echo $v['time'] ?></td>
            </tr>   
        <?php } ?>
</table>
</center>

</body>

</html>

<?php $conn = null; ?>