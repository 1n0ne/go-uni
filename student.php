<?php 
include 'config.php';
?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head> 
	<meta charset="utf-8">
	<title>صفحة الطالب</title>
	<link rel="styleSheet" type="text/css" href="css\stylesheet.css">
	<link rel="styleSheet" type="text/css" href="css\StudentStyleSheet.css">
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
    	<h1>اهلاً بك</h1>
    	<form action="" method="post">
    		<label for="Neighborhood">اختاري الحي:</label><br><br>
    		<select id="Neighborhood" name="Neighborhood" >
                <option>المنطقه</option>
 
	<option value="1"> الحلقة الغربية - الحلقة الشرقية - القيم</option>
	<option value="3"> الحلقة الغربية - الحلقة الشرقية - مخطط القاضي</option>
	<option value="4"> وادي النمل - المنتزة</option>
	<option value="5"> العرفاء</option>
	<option value="6"> ريحه - الواصليه</option>
	<option value="7"> السحيلي</option>
	<option value="8"> السر - الزوران</option>
	<option value="9"> معشي</option>
	<option value="10"> الرميدة - الزوران</option>
	<option value="11"> البلد</option>
	<option value="12"> الواسط - السيل الصغير</option>
	<option value="13"> ريحه - رحاب</option>
	<option value="14"> قيا</option>
    </select>
    <br><br>

    <label for="period">اختاري الفتره :</label><br><br>
    <select id="period" name="period" >
    	<option >الفتره</option>
        <option value="1"> صباحي</option>
	    <option value="2">مسائي</option>
	</select>
	<br><br>

	<button type="submit" class="btn">أبحث</button>
    	</form>
    
    
    <?php
    if(isset($_POST["Neighborhood"]) && isset($_POST["period"])){
             $Neighborhood = $_POST["Neighborhood"];
             $period = $_POST["period"];

     $sel_query="Select * from bus_driver WHERE neigh_id  = '$Neighborhood' and period  = '$period' ";
     $result = mysqli_query($connection,$sel_query) or mysqli_error($connection);

     echo "<table >
<tr>
<th>اسم السائق</th>
<th>نوع الحافه</th>
<th>السعر</th>
<th>رقم الهاتف</th>
</tr>";

if(!$result){
	die( mysqli_error($connection));
}
else{
while($row = mysqli_fetch_array($result)) {

 echo "<tr>";
    
    
    echo "<td width=10%>" . $row["dri_name"] . "</td>";
    echo "<td width=10%>" . $row["bus_type"] . "</td>";
    echo "<td width=6%>" . $row["price"] . "</td>";
    echo "<td width=10%>" . $row["mobile"] . "</td>";
	
	echo "</td>";
	
}
echo "</table>";


}




}

    ?>

        
     </div>      

    <div class="footer">
           <p>©  جميع الحقوق محفوظه2022</p>
    </div>





</body>
</html>