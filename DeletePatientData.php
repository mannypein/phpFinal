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
    $sql = "DELETE FROM patientTable WHERE id='".$_GET["id"]. "'";
    if(mysqli_query($conn,$sql)) {
        echo "Deleted Patient";
    }
    else {
        echo "Failed to insert " . $sql . " with error " . mysqli_error($conn);
    }
?>

<?php include('./PatientFooter.php'); ?>