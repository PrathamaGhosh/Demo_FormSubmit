<?php
$conn = mysqli_connect("localhost:4306","root","","formdb");
$name=$_POST['user'];
$pass=$_POST['pass'];
$sql = "INSERT INTO formtable(username, password) 
VALUES('$name','$pass')";
$res=mysqli_query($conn,$sql);
 
?> 
