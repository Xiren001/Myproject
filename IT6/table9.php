
<?php

require_once('database.PHP');
echo"<h1><q>logtbl</q> Record.<h1>";


$sql ="SELECT * FROM logtbl";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<table width='500' border='1'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> DESCRIPTION </th>";
echo "<th> DATE_ADDED </th>";

echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $id = $row['id'];
    $description = $row['description'];
    $date_added = $row['date_added'];

  echo "<tr>";
  echo "<td>" . $id . "</td>";
  echo "<td>" . $description . "</td>";
  echo "<td>" . $date_added . "</td>";

  echo "</tr>";
 }
  echo"</table>";
 
?>
