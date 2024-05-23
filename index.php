<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <!-- <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit" value="submit"> 
                            "> -->
    <!-- <label for="">radius</label>
    <input type="number" name="radius">
    <input type="submit"value="submit"> -->
    <label for="">username</label>
    <input type="text" name="username"><br>
    <label for="">password</label>
    <input type="password" name="password"><br>
    <button type="submit" name="submit">Submit Here</button>
    </form>
</body>
</html>
<?php
//echo "hi here"
// $str="hi this first php here";
// $age=20;//integer var
// $old=21;
// $for_sale=true;
// $for_sales=false;//boolean var
// $total=$age*$old;s
// echo "<h1>". $str . "<h1>";
// echo "hi here"."<br>";// variables in php
// $name="prathama";
// echo "hi {$name} <br>";
// echo "what you want <br>";
// echo "you have total {$total} pizza <br>";
 
// echo "your sale is {$for_sale}<br>";
// echo "you are {$age} year old";
//echo "{$_GET["username"]}";
//echo "<prep>";
//print_r($_GET);
// $newRadius=$_GET["radius"];
// //$name=$_POST["username"];
// $area=pi()*$newRadius*$newRadius;
// echo $area;
//echo "your username is {$_GET["username"]}";
//echo "</prep>";
$newname=$_POST["username"];
echo "your username is $newname <br>";
echo "your password is {$_POST["password"]}";

?>