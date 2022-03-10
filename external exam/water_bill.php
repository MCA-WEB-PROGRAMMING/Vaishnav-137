<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Water Bill</title>
</head>
<body bgcolor="cyan">
    <center>
        <h2><u>Water Bill</u></h2><br><br>
        <form name="form" method="POST">
        <table>
            <tr>
                <th>Meter Number :</th>
                <td><input type="text" name="mnum" placeholder="Enter Meter Number"></td>
            </tr>
            <tr>
                <th>Quantity of water used :</th>
                <td><input type="text" name="qty" placeholder="Enter Quantity(in kilo litres)"></td>
            </tr>
            <tr class="center">
                <th colspan="2"><input type="submit" name="submit"></th>
            </tr>
        </table><br><br><hr><br>
        

        <?php

        if(isset($_POST['submit']))
        {
            $num=$_POST['mnum'];
            $quan=$_POST['qty'];

            $amount=0;
            if($quan>0&&$quan<=15)
            {
                $amount=$quan*3;
            }
            else if($quan>15&&$quan<=30)
            {
                $amount=$quan*6;
            }
            else if($quan>30&&$quan<=60)
            {
                $amount=$quan*12;
            }
            else if($quan>60)
            {
                $amount=$quan*24;
            }
        

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Meter Number :".$num;
        echo "<br>";
        echo "<br>";
        echo "Quantity of water used :".$quan."  kilo litres";
        echo "<br>";
        echo "<br>";
        echo "Bill Amount :".$amount;
        echo "<br>";
        echo "<br>";

        }

        ?>


</form>
</body>
</html>