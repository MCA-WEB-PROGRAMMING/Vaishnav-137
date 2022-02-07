<html>
<head>
<title>Employee Details</title>
</head>
<body>
<div>
<form method="POST">
    <h3 align="center"><u>EMPLOYEE DETAILS</u></h3>
  <table align="center">
<tr>
  <td>Employee id</td>
  <td><input type="number" name="eid" value=""/></td>
</tr>
<tr>
<td>Employee Name</td>
<td><input type="text" name="ename" value=""></td>
</tr>
<tr>
<td>Job Name</td>
<td><input type="text" name="job" value=""></td>
</tr>
<tr>
<td>Manager id</td>
<td><input type="number" name="mid" value=""></td>
</tr>
<tr>
<td>Salary</td>
<td><input type="number" name="salary" value=""></td>
</tr>
<tr>
<td><br><br><center><input type="submit" name="submit"></center></td>
</tr>
</table>
</form>
</div>
<br>
<br>
<br>

<?php
if(isset($_POST['submit']))
{
    $emp_id=$_POST['eid'];
    $emp_name=$_POST['ename'];
    $job_name=$_POST['job'];
    $manager_id=$_POST['mid'];
    $salary=$_POST['salary'];
    $con=mysqli_connect("localhost","root","","student");
    if($con)
    {
        echo("Successfully connected to database");
        echo "<br>";
    }
    else
    {
        echo("Connection failed");
    }
    $query="INSERT INTO emp_tb(emp_id,emp_name,job,manager_id,salary)VALUES('{$emp_id}','{$emp_name}','{$job_name}','{$manager_id}','{$salary}')";
  
if(mysqli_query($con,$query))
{
    echo("Data inserted successfully");
    echo "<br>";
}
else
{
    echo("Data insertion failed");
    echo "<br>";
}

    ?>
    <h2>Employees whose salary greater than 35000</h2>
<table border="1">
<tr>
<th>Employee Name</th>
<th>Salary</th>
</tr>
<?php
$display="SELECT emp_name,salary FROM emp_tb WHERE salary>35000";
$details=mysqli_query($con,$display);
while($res=mysqli_fetch_assoc($details))
{
    ?>
   <tr>
    <td><?php echo $res['emp_name'];?></td>
    <td><?php echo $res['salary'];?></td>
</tr>
<?php

}
}
?>
</table>
</body>
</html>