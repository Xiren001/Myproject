
<?php

require_once('database.PHP');
echo"<h1><q>employee</q> Record.<h1>";


$sql ="SELECT * FROM employee";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<Table width='500' border='1'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> USERNAME </th>";
echo "<th> PASSWORD </th>";
echo "<th> NAME </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $name = $row['name'];
  echo "<tr>";
  echo "<td>" . $id . "</td>";
  echo "<td>" . $username . "</td>";
  echo "<td>" . $password . "</td>";
  echo "<td>" . $name . "</td>";
  echo "</tr>";

 }
 
 echo"</table>";
 
?>
