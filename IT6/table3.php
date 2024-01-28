
<?php

require_once('database.PHP');
echo"<h1><q>departments</q> Record.<h1>";


$sql ="SELECT * FROM departments";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<Table width='500' border='1'>";
echo "<tr>";
echo "<th> DEPARTMENT_ID </th>";
echo "<th> DEPARTMENT_NAME </th>";
echo "<th> MANAGER_ID </th>";
echo "<th> LOCATION_ID </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $department_id = $row['department_id'];
    $department_name = $row['department_name'];
    $manager_id = $row['manager_id'];
    $location_id = $row['location_id'];
  echo "<tr>";
  echo "<td>" . $department_id . "</td>";
  echo "<td>" . $department_name . "</td>";
  echo "<td>" . $manager_id . "</td>";
  echo "<td>" . $location_id . "</td>";
  echo "</tr>";

 }
 
 echo"</table>";
 
?>
