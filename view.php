<?php include "connect.php"; ?>

<h2>Student Records</h2>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Course</th>
<th>Year Level</th>
</tr>

<?php

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {

echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["course"]."</td>";
echo "<td>".$row["year_level"]."</td>";
echo "</tr>";

}

}

?>

</table>