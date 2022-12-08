<?php
// store the hostname of the MySQL server 
$dbhost = "localhost";
//store the username to login to MySQL 
$dbuser = "root";
// store the password to login to MySQL 
$dbpass = "";
// store the name of the MySQL database 
$dbname = "bus_db";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die("NO DATABASE CONNECTION"); 
mysqli_set_charset($connection,'utf8');
?>