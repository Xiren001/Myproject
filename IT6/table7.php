
<?php

require_once('INDEX.PHP');
echo"<h1><q>job_history</q> Record.<h1>";


$sql ="SELECT * FROM job_history";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<table width='500' border='1'>";
echo "<tr>";
echo "<th> EMPLOYEE_ID </th>";
echo "<th> START_DATE </th>";
echo "<th> END_DATE </th>";
echo "<th> JOB_ID </th>";
echo "<th> DEPARTMENT_ID </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
   
    $employee_id = $row['employee_id'];
    $start_date = $row['start_date'];
    $end_date = $row['end_date'];
    $job_id = $row['job_id'];
    $department_id = $row['department_id'];
  echo "<tr>";
 
  echo "<td>" . $employee_id . "</td>";
  echo "<td>" . $start_date . "</td>";
  echo "<td>" . $end_date . "</td>";
  echo "<td>" . $job_id . "</td>";
  echo "<td>" . $department_id . "</td>";
  echo "</tr>";
 }
  echo"</table>";
 
?>
