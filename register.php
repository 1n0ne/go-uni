<?php

include("config.php");

$uname = mysqli_real_escape_string($connection, $_REQUEST['name']);
$mobile = mysqli_real_escape_string($connection, $_REQUEST['Phone']);
$busType = mysqli_real_escape_string($connection, $_REQUEST['bus']);
$price = mysqli_real_escape_string($connection, $_REQUEST['fee']);
$nigh = mysqli_real_escape_string($connection, $_REQUEST['Neighborhood']);
$period =  mysqli_real_escape_string($connection, $_REQUEST['Time']);
$password = mysqli_real_escape_string($connection, $_REQUEST['psw']);
	
	
	$command="INSERT INTO `bus_driver`(BUSID,dri_name,mobile,bus_type,price,neigh_id,period,password) 
VALUES ('NULL','$uname','$mobile','$busType','$price','$nigh','$period','$password')";


	if (mysqli_query($connection, $command)) {
    echo '<script> alert("تم التسجيل بنجاح") </script>';
	echo"<script>location.href='driverLogin.html'</script>";

}
 else {
    echo "Error: " . $command . "<br>" . mysqli_error($connection);
}



?>