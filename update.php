<?php
session_start();
$id=$_SESSION["id"];
include 'config.php';



$uname = mysqli_real_escape_string($connection, $_REQUEST['name']);
$mobile = mysqli_real_escape_string($connection, $_REQUEST['Phone']);
$busType = mysqli_real_escape_string($connection, $_REQUEST['bus']);
$price = mysqli_real_escape_string($connection, $_REQUEST['fee']);
$nigh = mysqli_real_escape_string($connection, $_REQUEST['Neighborhood']);
$period =  mysqli_real_escape_string($connection, $_REQUEST['Time']);
$password = mysqli_real_escape_string($connection, $_REQUEST['psw']);
	$command="update `bus_driver`set dri_name='$uname',mobile='$mobile',bus_type='$busType',price='$price',neigh_id='$nigh',period='$period',password='$password' where BUSID=$id ";

	if (mysqli_query($connection, $command)) {
    echo '<script> alert("تم انشاء التغيرات بنجاح الرجاء تسجيل الدخول من جديد!") </script>';
	echo"<script>location.href='driverLogin.html'</script>";
}
 else {
    echo "Error: " . $command . "<br>" . mysqli_error($connection);
}




?>