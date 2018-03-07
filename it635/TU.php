<?php
echo $argv[0].PHP_EOL;
$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}

echo'a';
$TID=$_POST["TID"];
$TName=$_POST["TName"];

$sql = "Update ClientD SET Trainer='$TName' WHERE ID='$TID';";

$response = $mysql->query($sql);
/*
if ($ID!=$TID)
echo'c';
{
        echo "Wrong ID or Trainer name: ".$mysql->error.PHP_EOL;
        exit(0);
}
*/
//while($result = $response->fetch_assoc())
//{

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

        print_r($result);

        echo PHP_EOL;
}
//}

//echo $argv[0]."".PHP_EOL;


?>

