<?php include "connect.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Student Record System</title>
</head>

<body>

<h2>Add Student Record</h2>

<form method="POST">

Name: <input type="text" name="name"><br><br>

Course: <input type="text" name="course"><br><br>

Year Level: <input type="number" name="year"><br><br>

<input type="submit" name="submit" value="Add Student">

</form>

<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];
$course = $_POST['course'];
$year = $_POST['year'];

$sql = "INSERT INTO students(name, course, year_level)
VALUES ('$name','$course','$year')";

if($conn->query($sql) === TRUE){
    echo "Student record added successfully.";
}
else{
    echo "Error: " . $conn->error;
}

}

?>

</body>
</html>