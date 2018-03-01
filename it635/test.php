<?php
echo $argv[0].": begin".PHP_EOL;
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
        var_dump($result);
        echo PHP_EOL;
}
}
echo $argv[0]."".PHP_EOL;
?>

