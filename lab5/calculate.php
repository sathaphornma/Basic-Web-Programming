<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate</title>
    <style>
        b{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $op = $_POST["op"];

        switch($op){
            case '+': $sum = $num1+$num2 ; break;
            case '-': $sum = $num1-$num2 ; break;
            case '*': $sum = $num1*$num2 ; break;
            case '/': $sum = $num1/$num2 ; break;
        }
        
    ?>

    <center>

        <p>The answe of
            <b><?php echo $num1.' '.$op.' '.$num2.' = '.$sum ?></b>
        </p>
        <p>.................................</p>
        <button onclick="window.history.back();">Go back to Calculator</button>
    </center>

</body>
</html>