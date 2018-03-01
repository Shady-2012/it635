<?php
echo $argv[0].": begin".PHP_EOL;
$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
	echo "error connecting to database: ".$mysql->error.PHP_EOL;
	exit(0);
}


$Name=$_POST['Name'];
$Password=$_POST['Password'];

$log = "SELECT * FROM Login WHERE Name='$Name' AND Password = SHA1('$Password');";
$response = $mysql->query($log);
if ($mysql->errno != 0)

{
        echo "Wrong Username Or Password: ".$mysql->error.PHP_EOL;
        echo $sql.PHP_EOL;
        exit(0);
}

while($result = $response->fetch_assoc())
{
        var_dump($result);
        echo PHP_EOL;
}


echo'bye';

$sql = "select * from ClientD ;";
$response = $mysql->query($sql);
if ($mysql->errno != 0)

{
	echo "error executing sql: ".$mysql->error.PHP_EOL;
	echo $sql.PHP_EOL;
	exit(0);
}

while($result = $response->fetch_assoc())
{
        var_dump($result);
        echo PHP_EOL;
}

echo $argv[0].": end".PHP_EOL;
?>

<html>
<title>Update yout schudule </title>
 <h1>You Can Update your schudule by choosing the day and the workout</h1>

 <body>


<action="TU.php">
<div class="container">
    <label for="ID"><b>Client ID</b></label>
    <input type="INT" placeholder="Enter Client ID" name=ID" >

<div class="container">
    <label for="TName"><b>Trainer Name</b></label>
    <input type="text" placeholder="Enter Trainer Name" name=TName" >

</body>
<button type="submit">Submit</button> 
 
</html>

