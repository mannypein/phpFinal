<?php include('./PatientHeader.php'); ?>

<?php
    $user = "root";
    $pass = "root";
    $host = "192.168.1.126";
    $dbname = "firstDB";
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    if($conn->connect_error) {
        die("Could not connect to db: " . mysqli_error());
    }

$sql = "SELECT id, name, DOB, phone_Number, Address FROM patientTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " Name: " . $row["name"]. " Date of Birth: " . $row["DOB"].  " Phone number:  " . $row["phone_Number"]. " Address: " . $row["Address"] . " " ."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<?php include('./PatientFooter.php'); ?>