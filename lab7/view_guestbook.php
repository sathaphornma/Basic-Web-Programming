<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
    <b>Guestbook Record</b>
    <hr class="hr-red">
    <?php
    $data = file("./gbook.txt");
    foreach ($data as $line_num => $line) {
        echo $line_num + 1 . " : " . $line . "<br>";
    }
    ?>
    <hr class="hr-red">
    <?php echo 'Totle number of records is '.$line_num+=1 ; ?>


    <div class="text-center">
        <a href="https://mail.google.com/mail/mu/">email: sathaporn.ma@rmuti.ac.th</a>
    </div>

</body>

</html>