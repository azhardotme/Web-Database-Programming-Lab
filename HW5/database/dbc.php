<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$myconn=mysqli_connect("$db_host","$db_user","$db_password");
$sql="CREATE DATABASE customer";
$result=mysqli_query($myconn,$sql);



?>
