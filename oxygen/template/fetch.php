<?php 
mysqli_connect("localhost","root","")||die("error");
mysqli_select_db("medi")||die("error");
echo "connected";
?>