
<?php

require_once('INDEX.PHP');
echo"<h1><q>locations</q> Record.<h1>";


$sql ="SELECT * FROM locations";
$query = $conn ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

echo "<table width='500' border='1'>";
echo "<tr>";
echo "<th> LOCATION_ID </th>";
echo "<th> STREET_ADDRESS </th>";
echo "<th> POSTAL_CODE </th>";
echo "<th> CITY </th>";
echo "<th> STATE_PROVINCE </th>";
echo "<th> COUNTRY_ID </th>";
echo "<tr>";

 while($row = $query->fetch_assoc()) {
    $location_id = $row['location_id'];
    $street_address = $row['street_address'];
    $postal_code = $row['postal_code'];
    $city = $row['city'];
    $state_province = $row['state_province'];
    $country_id = $row['country_id'];
  echo "<tr>";
  echo "<td>" . $location_id . "</td>";
  echo "<td>" . $street_address . "</td>";
  echo "<td>" . $postal_code . "</td>";
  echo "<td>" . $city . "</td>";
  echo "<td>" . $state_province . "</td>";
  echo "<td>" . $country_id . "</td>";
  echo "</tr>";
 }
  echo"</table>";
 
?>
