<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Freedom Fighters</title>
    <style>
        h2{color: crimson}
        </style>
        
</head>
<body style="background-color: grey; border: 2px solid;">
    <center>
        <h2><u>INDIAN FREEDOM FIGHTERS</u></h2>
        <table border="1" bgcolor="cyan">
            <tr>
                <th>Key</th>
                <th>Name</th>
            </tr>

            <?php

            $n=array('1'=>'Mahathma Gandhi','2'=>'Jawaharlal Nehru','3'=>'Subash Chandra Bose','4'=>'Bhagat Singh','5'=>'K.Kelappan');
            

            foreach($n as $k=>$v)
            {
                
                
                echo "<tr><td><h3>$k</h3></td><td><h3>$v</h3></td></tr>";
                

                
                

                
            }
            ?>
        </table>
    </center>
</body>
</html>