<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Input Text</title>
    <style>
        fieldset {
            border-color: red;
            margin: auto;
            width: 480px;
            padding: 10px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: 80%;
            margin: auto;
        }

        th {
            background-color: skyblue;
        }

        td {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <?php
    $exce = array();
    $txt = $_GET['txt'];
    $rows = explode("\n", $txt);

    foreach ($rows as $id => $row) {
        $row = explode("\t", $row);
        foreach ($row as $col) {
            $exce[$id][] = $col;
        }
    }
    ?>
    <fieldset>
        <legend>
            <h3>Data</h3>
        </legend>
        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>SCORE</th>
            </tr>
            <?
            foreach ($exce as $key) {
                echo '<tr>';
                foreach ($key as $c => $value) { //$c == colum
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    </fieldset>
</body>

</html>