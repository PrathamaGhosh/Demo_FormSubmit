<?php
// $con=new mysqli("localhost");
// mysqli_connect($server,$username,$password,$dataBaseName)
// $conn=mysqli_connect("localhost","root","","demodatabase");
$conn=mysqli_connect("localhost:4306","root","1234","datadb");
 

//here we are checking the connection(php with db)
if($conn){
   
    
    echo "yup connection is successfull";
    

}
else{
    // die("sorry failed to connect".mysqli_connect_error());
    echo "not connected";
}
 

?>