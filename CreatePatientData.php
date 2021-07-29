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
    $sql = "INSERT INTO patientTable(name, DOB, phone_Number, Address) VALUES ('".htmlspecialchars($_GET['name']). "', '" . htmlspecialchars($_GET['dob']) . "', '" . htmlspecialchars($_GET['phone_Number']) . "', '" . htmlspecialchars($_GET['address']) . "')";
    if(mysqli_query($conn,$sql)) {
        echo "Inserted new record";
    }
    else {
        echo "Failed to insert " . $sql . " with error " . mysqli_error($conn);
    }
?>

<?php include('./PatientFooter.php'); ?>