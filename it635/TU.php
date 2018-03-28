
<?php

$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}


$CID=$_POST["CID"];
$Day=$_POST["Day"];
$WO=$_POST["WO"];

$sql = "Update ClientS SET $Day='$WO' WHERE ID='$CID';";

$response = $mysql->query($sql);

$sec = "select * from ClientS ;";
$response = $mysql->query($sec);
if ($mysql->errno != 0){
        echo "error executing sql: ".$mysql->error.PHP_EOL;
        echo $sec.PHP_EOL;
        exit(0);}
while($result = $response->fetch_assoc())
{//       print_r($result);
echo PHP_EOL;}?>

<?php
$mysql = new mysqli("localhost","root","Shady2010","Trainer");
if ($mysql->errno != 0)
{
        echo "error connecting to database: ".$mysql->error.PHP_EOL;
        exit(0);
}
$sql="select * from ClientS WHERE ID='$CID';";
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

