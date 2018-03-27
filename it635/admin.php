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
<title>Trainer Page</title>
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
//////////////////////////////////////////////



<html>
  <title>Update yout schudule </title>
 <h1>You Can Update your schudule by choosing the day and the workout</h1>
  <body>
  <form name="MY Form"action="TU.php" method="POST">
  Trainer name<input type="text"name="TName">
  <br>ID<input typy="password" name="TID">
  <br>
  <input type="submit"name="button1"value="login">
  </form>
  </body>
</html>






