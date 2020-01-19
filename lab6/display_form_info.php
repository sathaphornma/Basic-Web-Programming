<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Form Info</title>
</head>
<style>
    fieldset {
        border-color: red;
        margin: auto;
        padding: 10px;
    }

    table {
        margin: auto;
    }
    th{
        text-align:right;
    }
</style>

<body>
    <fieldset>
        <legend align="center">
            <h2>OUTPUT</h2>
        </legend>
        <table>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Intial:</th>
                <td><? echo $_POST['intial'] ;?></td>
            </tr>
            <tr>
                <th>First Name:</th>
                <td><? echo $_POST['fname'] ;?></td>
            </tr>
            <tr>
                <th>Last Name:</th>
                <td><? echo $_POST['lname'] ;?></td>
            </tr>
            <tr>
                <th>Date Of Birth:</th>
                <td><? echo $_POST['days'].' '.$_POST['months'].' '.$_POST['years'] ;?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><? echo $_POST['address'];?></td>
            </tr>
            
        </table>
    </fieldset>
</body>

</html>