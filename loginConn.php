<?php
//to get access the files from different location(include,require)
require ('ConnDb.php');


if(isset($_POST['submit'])){
 
$uname=$_POST['uname'];
$pname=$_POST['pname'];

$sql="INSERT INTO tablenew (Name,Email) VALUES ('$uname','$pname')";
 $res=mysqli_query($conn,$sql);
 if($res){
    //  echo "<script>alert('data inserted')</script>";
    // echo "data submitted";
    // this to redirect the form to html page(by using header function)
    header ('Location:welcome.html');

 }
 else{
     echo "<script>alert('error')</script>";
 }
 }
 //here closing the connection at the end
 mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #container{
            background-color: grey;
            width:600px;
            height:300px;
            text-align: center;
            color: white;
            padding-top: 20px;
            font-size: 35px;
        }
        #button{
            height:30px;
            width:70px;
        }

    </style>
</head>
<body>
<form action="loginConn.php" method="post">
    <div id="container">
    
        <!-- id:<input type="number" name="id"><br><br> -->
username: <input type="text" name="uname"><br><br>
Password: <input type="password" name="pname"><br>
<input id="button" type="submit" name="submit">
</div>
    </form>
    

</body>
</html>
