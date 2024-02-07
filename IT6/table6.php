
<?php

require_once('INDEX.PHP');
echo"<h1><q>jobs</q> Record.<h1>";


$sql ="SELECT * FROM jobs";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<table width='500' border='1'>";
echo "<tr>";
echo "<th> JOB_ID </th>";
echo "<th> JOB_TITLE </th>";
echo "<th> MIN_SALARY </th>";
echo "<th> MAX_SALARY </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $job_id = $row['job_id'];
    $job_title = $row['job_title'];
    $min_salary = $row['min_salary'];
    $max_salary = $row['max_salary'];
  echo "<tr>";
  echo "<td>" . $job_id . "</td>";
  echo "<td>" . $job_title . "</td>";
  echo "<td>" . $min_salary . "</td>";
  echo "<td>" . $max_salary . "</td>";
  echo "</tr>";
 }
  echo"</table>";
 
?>
