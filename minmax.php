<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Max and Min</title>
</head>

<body>

    <?php
    $numb = (array($_GET['num1'], $_GET['num2'], $_GET['num3']));

    function answer($numb)
    {

        global $numb;
        switch ($_GET['find']) {
            case 'min':
                echo 'This Minimum number of<br/>' ;
                echo $numb[0].' ,'.$numb[1].' , and '.$numb[2].' is<br/>' ;
                echo sortMin($numb);
                break;

            case 'max':
                echo 'This Maximum number of<br/>' ;
                echo $numb[0].' ,'.$numb[1].' , and '.$numb[2].' is<br/>' ;
                echo sortMax($numb);
                break;
        }
    }

    function sortMax($arr)
    {
        $n = count($arr);
        $max = $arr[0];
        for ($i = 1; $i < $n; $i++)
            if ($max < $arr[$i])
                $max = $arr[$i];
        return $max;
    }

    function sortMin($arr)
    {
        $n = count($arr);
        $min = $arr[0];
        for ($i = 1; $i < $n; $i++)
            if ($min > $arr[$i])
                $min = $arr[$i];
        return $min;
    }

    ?>

    <center>
    <hr width="80%">
    <p></p>
    <?php
        answer($numb);
        echo '<br/>' ;
    ?>
    <button onclick="window.history.back();">Go Back to Min and Max</button>
    <hr width="80%">
    </center>
</body>

</html>