<?php
$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}


$Name=$_POST["Name"];
$Password=$_POST["Password"];

$sql = "SELECT * FROM Login WHERE Name='$Name' AND Password =SHA1('$Password');";

$response = $mysql->query($sql);
if ($mysql->errno != 0)

{
        echo "Wrong Username Or Password: ".$mysql->error.PHP_EOL;
        echo $sql.PHP_EOL;
        exit(0);
}

while($result = $response->fetch_assoc())
{

$get = "select * from ClientD ;";
$response = $mysql->query($get);
if ($mysql->errno != 0)

{
        echo "error executing sql: ".$mysql->error.PHP_EOL;
        echo $get.PHP_EOL;
        exit(0);
}

while($result = $response->fetch_assoc())
{

//        print_r($result);

        echo PHP_EOL;
}
}
echo $argv[0]."".PHP_EOL;
?>

<?php


$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}

$sql="select * from ClientD";
$records=$mysql->query($sql);
?>

<html>
<head>
 <h1>Client Details</h1>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Client Name</th>
<th>ID</th>
<th>Weight</th>
<th>Trainere</th>
<th>Programe Detailes</th>

<tr>

<?php

while($ClientD = $records->fetch_assoc())
{
echo "<tr>";
echo "<td>".$ClientD['ClientName']."</td>";
echo "<td>".$ClientD['ID']."</td>";
echo "<td>".$ClientD['Weight']."</td>";
echo "<td>".$ClientD['Trainer']."</td>";
echo "<td>".$ClientD['ClientDetails']."</td>";
echo "</tr>";

}



?>
</table>
</body>
</html>

<html>
  <title>Update yout schudule </title>
 <h1>Update Trainer Name</h1>
  <body>
  <form name="MY Form"action="TU.php" method="POST">
  Trainer name<input type="text"name="TName">
  <br>ID<input typy="password" name="TID">
  <br>
  <input type="submit"name="button1"value="login">
  </form>
  </body>
</html>

<?php


$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}

$sql="select * from ClientS";
$records=$mysql->query($sql);
?>

<html>
<head>
 <h1>workout Schudele</h1>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Client Name</th>
<th>ID</th>
<th>Saturday</th>
<th>Sunday</th>
<th>Monday</th>
<th>Tuesday</th>
<th>Wednesday</th>
<th>thursday</th>
<th>Friday</th>


<tr>
<?php

while($ClientS = $records->fetch_assoc())
{
echo "<tr>";
echo "<td>".$ClientS['User']."</td>";
echo "<td>".$ClientS['ID']."</td>";
echo "<td>".$ClientS['Saturday']."</td>";
echo "<td>".$ClientS['Sunday']."</td>";
echo "<td>".$ClientS['Monday']."</td>";
echo "<td>".$ClientS['Tuesday']."</td>";
echo "<td>".$ClientS['Wednesday']."</td>";
echo "<td>".$ClientS['Thursday']."</td>";
echo "<td>".$ClientS['Friday']."</td>";

echo "</tr>";

}
?>
</html>
</body>
</table>
</head>

<?php


$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}

$sql="select * from WorkoutM";
$records=$mysql->query($sql);
?>

<html>
<head>
 <h1>workout Machines</h1>
</head>
<body>

<table width="600" border="1" cellpadding="1" cellspacing="1">
<tr>

<th>Chest Day</th>
<th>Back Day</th>
<th>Shoulder Day</th>
<th>Arms Day</th>
<th>Leg Day</th>

<tr>

<?php

while($WorkoutM = $records->fetch_assoc())
{
echo "<tr>";
echo "<td>".$WorkoutM['Chest']."</td>";
echo "<td>".$WorkoutM['Back']."</td>";
echo "<td>".$WorkoutM['Shoulders']."</td>";
echo "<td>".$WorkoutM['Arms']."</td>";
echo "<td>".$WorkoutM['Leg']."</td>";

echo "</tr>";

}

?>
</table>
</body>
</html>

<html>
  <title>Update yout schudule </title>
 <h1>Update workout</h1>
  <body>
  <form name="MY Form"action="TU.php" method="POST">
  Trainer name<input type="text"name="TName">
  <br>ID<input typy="password" name="TID">
  <br>
  <input type="submit"name="button1"value="login">
  </form>
  </body>
</html>


