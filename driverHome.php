<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head> 
	<meta charset="utf-8">
	<title>صفحة السائق</title>
	<link rel="styleSheet" type="text/css" href="css\stylesheet.css">
	<link rel="styleSheet" type="text/css" href="css\driverHomeStyleSheet.css">
</head>
<body>
	<div class="header">
    	<div class="navbar">
    		<a href="index.html"><img src="imges\tray.jpeg" class="logo" alt="bus logo"></a>
          
          <nav>
          	<ul>
          		<li><a href="index.html">الصفحه الرئيسيه</a></li>
          		<li><a href="aboutus.html">من نحن؟</a></li>
          		<li><a href="contactus.html">تواصل معنا</a></li>

          	</ul>
          </nav>



    </div>
    </div>
    <div class="container">
    	<?php 

    	$name=$_SESSION["name"] ;
        $phone=$_SESSION["Phone"];
        $password=$_SESSION["password"] ;


    	echo "<p>اهلاً</p>" . $name;

    	$sel_query="Select * from bus_driver WHERE mobile  = '$phone' and password  = '$password' ";
     $result = mysqli_query($connection,$sel_query) or mysqli_error($connection);

     echo "<table><caption>معلومات السائق</caption>

<tr>
<th>اسم السائق</th>
<th>نوع الحافه</th>
<th>الفتره</th>
<th>السعر</th>
<th>الحي</th>
<th>رقم الهاتف</th>
<th>كلمة المرور</th>
</tr>";

if(!$result){
	die( mysqli_error($connection));
}
else{
while($row = mysqli_fetch_array($result)) {
	 $neighId=$row["neigh_id"];
     $neigh_query="Select * from neighborhood WHERE ID  = '$neighId' ";
     $neighbohood_result = mysqli_query($connection,$neigh_query) or mysqli_error($connection);
     $neighbohood_row = mysqli_fetch_array($neighbohood_result);
     



 echo "<tr>";
    
    
    echo "<td width=10%>" . $row["dri_name"] . "</td>";
    echo "<td width=10%>" . $row["bus_type"] . "</td>";
    echo "<td width=10%>" . $row["period"] . "</td>";
    echo "<td width=6%>" . $row["price"] . "</td>";
    echo "<td width=6%>" . $neighbohood_row["nei_NAME"] . "</td>";
    echo "<td width=10%>" . $row["mobile"] . "</td>";
    echo "<td width=10%>" . $row["password"] . "</td>";
	echo "</td>";
	$id=$row["BUSID"];
	$_SESSION["id"]=$id;
	

}
echo "</table>";


}

    	 ?>
    	<input id="HomeButton"class="btn" type="button" value="تعديل المعلومات">
    	 <script type="text/javascript">
           document.getElementById("HomeButton").onclick = function () {
           location.href = "driverupdate.php"
           };
         </script>

    	</div>      

    <div class="footer">
           <p>©  جميع الحقوق محفوظه2022</p>
    </div>

</body>
</html>