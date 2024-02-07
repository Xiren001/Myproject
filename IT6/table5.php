
<?php

require_once('INDEX.PHP');
echo"<h1><q>employees</q> Record.<h1>";


$sql ="SELECT * FROM employees";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<Table width='500' border='1'>";
echo "<tr>";
echo "<th> EMPLOYEE_ID </th>";
echo "<th> FIRST_NAME </th>";
echo "<th> LAST_NAME </th>";
echo "<th> EMAIL </th>";
echo "<th> PHONE_NUMBER </th>";
echo "<th> HIRE_DATE </th>";
echo "<th> JOB_ID </th>";
echo "<th> SALARY </th>";
echo "<th> COMMISSION_PCT </th>";
echo "<th> MANAGER_ID </th>";
echo "<th> DEDPARTMENT_ID </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $employee_id = $row['employee_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $phone_number = $row['phone_number'];
    $hire_date = $row['hire_date'];
    $job_id = $row['job_id'];
    $salary = $row['salary'];
    $commission_pct = $row['commission_pct'];
    $manager_id = $row['manager_id'];
    $department_id = $row['department_id'];

  echo "<tr>";
  echo "<td>" . $employee_id . "</td>";
  echo "<td>" . $first_name . "</td>";
  echo "<td>" . $last_name . "</td>";
  echo "<td>" . $email . "</td>";
  echo "<td>" . $phone_number . "</td>";
  echo "<td>" . $hire_date. "</td>";
  echo "<td>" . $job_id. "</td>";
  echo "<td>" . $salary . "</td>";
  echo "<td>" . $commission_pct . "</td>";
  echo "<td>" . $manager_id . "</td>";
  echo "<td>" . $department_id . "</td>";
  echo "</tr>";

 }
 
 echo"</table>";
 
?>
