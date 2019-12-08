<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Thank</title>
</head>
<body>
        <div class="col-6 Ocenter bg-yellow">
            <?php
                if($_POST)
                    echo "<h1 align='center'>Thank You Very Much!</h1>" ;
                else
                    echo "<h1 align='center'>Not found Data!</h1>";
            ?>
        </div>
</body>
</html>