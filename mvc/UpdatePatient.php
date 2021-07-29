<?php include('./PatientHeader.php'); ?>

<form action="UpdatePatientData.php" method="GET">
    <p>Id: <input type="number" name="id" /></p>
    <p>Your name: <input type="text" name="name" /></p>
    <p>Your DOB: <input type="text" name="dob" /></p>
    <p>Your Phone Number: <input type="text" name="phone_Number" /></p>
    <p>Your Address: <input type="text" name="address" /></p>
    <p><input type="submit"/></p>
</form>

<?php include('./PatientFooter.php'); ?>