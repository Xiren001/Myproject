
<?php

require_once('database.PHP');
echo"<h1><q>countries</q> Record.<h1>";


$sql ="SELECT * FROM countries";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<Table width='500' border='1'>";
echo "<tr>";
echo "<th> COUNTRY ID </th>";
echo "<th> COUNTRY NAME </th>";
echo "<th> REGION ID </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $country_id = $row['country_id'];
    $country_name = $row['country_name'];
    $region_id = $row['region_id'];

  echo "<tr>";
  echo "<td>" . $country_id . "</td>";
  echo "<td>" . $country_name . "</td>";
  echo "<td>" . $region_id . "</td>";
  echo "</tr>";

 }
 
 echo"</table>";
 
?>
