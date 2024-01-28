
<?php

require_once('database.PHP');
echo"<h1><q>totjobs</q> Record.<h1>";


$sql ="SELECT * FROM totjobs";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<table width='500' border='1'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> JOB_TITLE </th>";
echo "<th> TOTAL </th>";

echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $id = $row['id'];
    $job_title = $row['job_title'];
    $total = $row['total'];
    
  echo "<tr>";
  echo "<td>" . $id . "</td>";
  echo "<td>" . $job_title . "</td>";
  echo "<td>" . $total . "</td>";

  echo "</tr>";
 }
  echo"</table>";
 
?>
