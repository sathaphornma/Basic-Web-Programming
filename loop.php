<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop</title>
</head>

<body>
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    function getLoop()
    {
        global $num1, $num2;

        for ($i = $num1; $i <= $num2; $i++) {
            if($i > 0 && $i < 10)
                echo '0'.$i . ' ';
            else
                echo $i . ' ';
        }
    }
    ?>

    <center>
        <?php echo 'num1 is' . $num1 . ' and num2 is ' . $num2; ?>
        <hr width="80%">
        <?php
        if ($num1 < $num2)
            getLoop();
        else
            echo '<b>error :</b> num1 ต้องน้อยกว่า num2';
        ?>
        <br>
        <button onclick="window.history.back();">Go Back to Loop Control</button>
        <hr width="80%">

    </center>
</body>

</html>