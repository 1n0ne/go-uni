<?php
session_start();
      $name=$_SESSION["name"] ;
      $phone=$_SESSION["Phone"];
      $password=$_SESSION["password"] ;
      $id=$_SESSION["id"];
      
include 'config.php';

?>

<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head> 
	<meta charset="utf-8">
	<title>تعديل البيانات</title>
	<link rel="styleSheet" type="text/css" href="css\stylesheet.css">
	<link rel="styleSheet" type="text/css" href="css\driverupdateStyleSheet.css">
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
    <form action="update.php" method="post" >
    <div class="container">

      <div style="float: right;margin-right:20vh;">
      <label><b>الاسم </b></label>    
<br>

    <input type="text" value="<?php echo ($name); ?>" name="name" id="name" required><br>

    <label><b>رقم الجوال</b></label>        
<br>
    <input type="text" value="<?php echo ($phone); ?>" name="Phone" id="Phone" pattern="[0-9]{9}"required><br>


    <label><b>كلمة المرور</b></label>    
<br>
    <input type="password" value="<?php echo ($password); ?>" name="psw" id="psw" required><br>
    <label><b>الحي</b></label><br>
            <select calss="Neighborhood" id="Neighborhood" name="Neighborhood" required>
                
 
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
    <br></div>

        <div style="float: left; margin-left:50vh;">
    <label><b>نوع الحافلة</b></label><br>
    <input type="radio" name="bus" value="BUS"required>
          <label >باص</label><br>
    <input type="radio"  name="bus" value="Chevrolet Van"required>
          <label >فان</label><br><br>
    
    <label><b>الفترة</b></label><br>
    <select class="select-selected" name="Time" required>
    <option value="1">صباحي</option>
    <option value="2">مسائي</option>
    </select>
    <br><br>

    <label><b>رسوم الاشتراك الشهري</b></label><br>
    <input class="select-selected" type="number" min="100" max="800" step="50" value="100" name="fee" id="fee"  required>
    <br></div>
    <div style="clear: both;"></div>
    	<button type="submit" class="registerbtn">تأكيد التغيرات</button>
    	</div></form>   

    <div class="footer">
           <p>©  جميع الحقوق محفوظه2022</p>
    </div>

</body>
</html>