<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Information</title>
    <style>
        fieldset {
            border-color: red;
            margin: auto;
            width: 480px;
            padding: 10px;
        }

        table {
            margin: auto;
        }

        tr.bordered {
            border-bottom: 1px solid grey;
        }
    </style>
</head>

<body>
    <?php $ms = array('January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December'); ?>

    <fieldset>
        <legend><b><i>You information</i></b></legend>
        <form action="display_form_info.php" method="post">
            <table>
                <tr class="bordered">
                    <td>
                        <b>Intial: </b>
                    </td>
                    <td>
                        <input type="radio" name="intial" value="Mr." checked><label>Mr.</label>
                        <input type="radio" name="intial" value="Ms."><label>Ms.</label>
                    </td>
                </tr>
                <tr>
                    <td><b>First Name:</b></td>
                    <td><input type="text" name="fname" value="Sathaporn"></td>
                </tr>
                <tr>
                    <td><b>Last Name:</b></td>
                    <td><input type="text" name="lname" value="Maneeboon"></td>
                </tr>
                <tr>
                    <td><b>Date Of Birth:</b></td>
                    <td>
                        <select name="days" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                            <?php for ($d = 1; $d <= 31; $d++) { ?>
                                <option value="<? echo $d ?>"><? echo $d ?></option>
                            <? } ?>
                        </select><br><br>
                        <select name="months" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                            <?php for ($m = 0; $m < count($ms); $m++) { ?>
                                <option value="<? echo $ms[$m] ?>"><? echo $ms[$m] ?></option>
                            <? } ?>
                        </select><br><br>
                        <select name="years" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
                            <?php for ($y = 1937; $y <= 1995; $y++) { ?>
                                <option value="<? echo $y ?>"><? echo $y ?></option>
                            <? } ?>
                        </select><br><br>
                    </td>
                </tr>
                <tr class="bordered">
                    <td><b>Address:</b></td>
                    <td>
                        <textarea name="address" rows="5">Nakhonraschasima, Thailand 30000</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                            <button type="submit">submit</button>
                            <button type="reset">reset</button>
                        </center>
                    </td>
                </tr>
            </table>

        </form>
    </fieldset>
</body>

</html>