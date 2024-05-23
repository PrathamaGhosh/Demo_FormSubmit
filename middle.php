<?php
//echo "hi";
//$count=0;
//$num=123;
// $num1=$num;
// $flag=true;
// while($num1>0){
//     $num1/=10;
//     if($num1==0){
//        $flag=true;
//         break;
//     }
//     $num1/=10;
//     $num/=10;
// }
// if($flag){
//     $mid=$num/10;
// echo "mid digit is $mid";
// }
// else{
//     echo "no middle digit";
// }
// while($num!=0){
// $count++;
//  $n/=10;
// }


// if($n%2==0){
//     $n=$n/(int)(pow(10,$count/2));


// }
// $length = 0;
// $number=1234567;
// $tempNumber =$number;
// while ($tempNumber != 0) {
//    $tempNumber /= 10;
//     $length++;
// }

// // Calculate the middle index
// $middleIndex = $length / 2;

// // Reset tempNumber to the original number
// $tempNumber = $number;

// // Initialize variables to store the middle digit and the loop counter
// $middleDigit = 0;
// $counter = 0;

// // Iterate through each digit of the number using a loop
// while ($tempNumber > 0) {
//     $digit = $tempNumber % 10;

//     // Check if the current digit is at the middle index
//     if ($counter == $middleIndex) {
//        $middleDigit = $digit;
//         break; // Exit the loop once the middle digit is found
//     }

//     // Move to the next digit and update the loop counter
//     $tempNumber /= 10;
//     $counter++;
// }
$num=1237574;
$count=0;
$temp=$num;
$number=$num;
$temp2=$num;
while($num!=0){
    $num=(int)($num/10);
    $count++;
}
// while($num!=0){
//     $c=(int)($num%10);
//     $num=(int)($num/10);
// }
while ($number >= 10) {
    $number /= 10;
}
$firstDigit=(int)$number;
// echo (int)$number;
// echo "The digit count is: $count <br>";
if($count%2==0){
    echo "no middle digit found";
}
else{
    for($i=1;$i<=(int)($count/2+1);$i++){
        $c=(int)($temp%10);
        $temp=(int)($temp/10);
}
$middleDigit=$c;
    // echo "The middle digit is: $c";
}
$sum1=abs($firstDigit-$middleDigit);
$sum2= abs($middleDigit-($temp2%10));
echo "$sum1 $sum2";
// Print the middle digit


?>