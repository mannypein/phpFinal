<?php include('./PatientHeader.php'); ?>

<?php
    $user = "root";
    $pass = "root";
    $host = "192.168.1.126";
    
$conn = new mysqli($host, $user, $pass);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<br />
<?php
    $sql = "CREATE DATABASE firstDB";

    if(mysqli_query($conn,$sql)) {
        
    }
    else {
        echo "Error creating database " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

<br />
 <?php
    /*$user = "root";
    $pass = "root";
    $host = "192.168.1.126";
    $dbname = "firstDB";
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    if($conn->connect_error) {
        die("Could not connect to db: " . mysqli_error());
    }

    $sql = "DROP DATABASE firstDB";

    if(mysqli_query($conn,$sql)) {
        echo "Database dropped";
    }
    else {
        echo "Error dropping database " . mysqli_error($conn);
    }
    */
?>
<br />
<?php
    $user = "root";
    $pass = "root";
    $host = "192.168.1.126";
    $dbname = "firstDB";
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    if($conn->connect_error) {
        die("Could not connect to db: " . mysqli_error());
    }

    $sql = "create table patientTable(
        id INT AUTO_INCREMENT, name varchar(255) NOT NULL, DOB varchar(255) NOT NULL, phone_Number varchar(255) NOT NULL, Address varchar(255) NOT NULL, primary key(id))";

    if(mysqli_query($conn,$sql)){
        
    }
    else {
        echo "Table is not created successfully " . mysqli_error($conn);
    }
?>

<br />

<?php
    /*$sql = "INSERT INTO patientTable(name, DOB, phone_Number, Address) VALUES ('Manuel Peinado', '08/18/2000', '956-337-7379', '143 S Main St')";
    if(mysqli_query($conn,$sql)) {
        echo "Inserted new record";
    }
    else {
        echo "Failed to insert " . $sql . " with error " . mysqli_error($conn);
    }*/
?>

<?php include('./PatientFooter.php'); ?>