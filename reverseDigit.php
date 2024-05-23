<?php
$num=12345;
$rev=0;
$c=0;
// while($num>0){
//     $c=(int)($num%10);
//     $rev=(int)(($rev*10)+$c);
//     $num=(int)($num/10);
// }
// echo "$rev";
// $even=0;
// $odd=0;
// while($num!=0){
// $last=$num%10;
// if($last%2==0){
//     $even++;
// }
// else{
//     $odd++;
// }
// $num=(int)($num/10);
// }
// echo "even :".$even."<br>";
// echo "odd :".$odd;

function change($a,$b){
    $a=2;
    $b=9;
    return $a;
}
$num=change(5,6);
echo $num;

?>