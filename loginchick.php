<?php
session_start();
include('config.php');
$name = $_POST['name'];
$Phone=$_POST['Phone'];
$password=$_POST['psw'];


	$myquery  = mysqli_query($connection,"SELECT * FROM `bus_driver` where `dri_name`='".($name)."' and `mobile`='".($Phone)."' and `password`='".(($password))."' "); 
$rowsnumber = mysqli_num_rows($myquery);
if($rowsnumber==0)
{
    
     echo'<script type="text/javascript">
	alert("خطأ في اسم المستخدم او كلمة المرور") ;
</script> ';
   echo"<script>location.href='driverLogin.html'</script>";
}
else{
    $_SESSION["name"] = $name;
    $_SESSION["Phone"] = $Phone;
    $_SESSION["password"] = $password;

echo"<script>location.href='driverHome.php'</script>";	 


	}
	


?>