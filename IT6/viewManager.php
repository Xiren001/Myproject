
<?php

require_once('INDEX.PHP');
echo"<br><h1>View Manager Table.<h1>";


$sql ="SELECT * FROM view_manager";
$query = $connection ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<Table border='1'>";
echo "<tr>";
echo "<th> Employee_Name </th>";
echo "<th> Managers_Name </th>";
echo "<th> Department_Name </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $Employee_Name = $row['Employee_Name'];
    $Managers_Name = $row['Managers_Name'];
    $Department_Name = $row['Department_Name'];
  echo "<tr>";
  echo "<td>" . $Employee_Name . "</td>";
  echo "<td>" . $Managers_Name . "</td>";
  echo "<td>" . $Department_Name . "</td>";
  echo "</tr>";


 }
 
 echo"</table>";
 
?>
