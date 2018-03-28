<?php

$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}

$TID=$_POST["TID"];
$TName=$_POST["TName"];
$sql = "Update ClientD SET Trainer='$TName' WHERE ID='$TID';";
$response = $mysql->query($sql);
$get = "select * from ClientD ;";
$response = $mysql->query($get);
if ($mysql->errno != 0){
        echo "error executing sql: ".$mysql->error.PHP_EOL;
        echo $get.PHP_EOL;
        exit(0);}
while($result = $response->fetch_assoc()){
//       print_r($result);
        echo PHP_EOL;}?>


<?php
$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}

$sql="select * from ClientD WHERE ID='$TID'";
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

