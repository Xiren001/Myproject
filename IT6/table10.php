
<?php

require_once('database.PHP');
echo"<h1><q>regions</q> Record.<h1>";


$sql ="SELECT * FROM regions";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<table width='500' border='1'>";
echo "<tr>";
echo "<th> REGION_ID </th>";
echo "<th> REGION_NAME </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $region_id = $row['region_id'];
    $region_name = $row['region_name'];
    
  echo "<tr>";
  echo "<td>" . $region_id . "</td>";
  echo "<td>" . $region_name. "</td>";
  echo "</tr>";
 }
  echo"</table>";
 
?>
