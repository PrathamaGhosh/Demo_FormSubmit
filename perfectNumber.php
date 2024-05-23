<?php
//perfect Number
// for($i=1;$i<=30;$i++){
//     $sum=0;
//     for($j=1;$j<$i;$j++){
//       if($i%$j==0){
//         $sum+=$j;
//       }
//     }
//     if($sum==$i){
//         echo $i."<br>";
//     }
// }

// strong number

// for($i=1;$i<=500;$i++){
//     $count=0;
//     $temp=$i;
//     $temp1=$i;
//     $sum=0;
//     $fact=1;
    
//        while($temp1!=0){
//         $last=(int)($temp1%10);
//         for($j=1;$j<=$last;$j++){
//             $fact=$fact*$j;
//         }
//         $sum+=$fact;
//         $fact=1;
//         // $sum+=pow($last,$count);
        
//         $temp1=(int)($temp1/10);
//        }
      
//        if($sum==$i){
//         echo "$i<br>";
//        }
// }
 

//     if($sum==$i){
//         echo $i."<br>";
//     }
// }

//pattern 1 printing
// $input_row=5;
// for($i=1;$i<=$input_row;$i++){
//     for($j=($input_row)-$i;$j>=1;$j--){
//         echo "&nbsp;&nbsp;";
//         // echo '';
//     }
//     for($k=$i;$k>0;$k--){
//         echo "*";
//     }
//     echo "<br>";
// }
//pattern 2
// for($i=1;$i<6;$i++){
//     for($j=1;$j<6-$i;$j++){
//         echo "$j";
//     }
//     echo "<br>";
// }
// echo chr(65+5);
// $store=range(1,8);
// // echo $store;
// print_r($store);
// echo intdiv(5,2);

//pattern 3
$input_row=5;
// for($i=1;$i<=$input_row;$i++){
 
//     for($j=1;$j<=$i;$j++){
//         echo chr(97+$j-1);
//     }
//     echo "<br>";
// }
//pattern 4
// for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo chr(65+$i-1);
//     }
//     echo "<br>";
// }
//pattern 5
// for($i=5;$i>=1;$i--){
//     for($j=1;$j<=$i;$j++){
//         echo chr(65+$j-1);
//     }
//     echo "<br>";
// }
//pattern 6
// for($i=5;$i>=1;$i--){
//     for($j=1;$j<=$i;$j++){
//         echo chr(65+$i-1);
//     }
//     echo "<br>";
// }
//pattern 7

// for($i=1;$i<=5;$i++){
//     for($j=5;$j>=$i;$j--){
//         echo chr(65+$i-1);
//     }
//     echo "<br>";
// }

//pattern 8
//  $k=65;
// for($i=$input_row;$i>=1;$i--){
 
//     for($j=1;$j<=$i;$j++){
//         echo chr(65-1+$i);
//     }
    
//     echo "<br>";
// }
//pattern 9
// 
//pattern 9
// for($i=1;$i<=$input_row;$i++){
 
//     for($j=$i;$j>=1;$j--){
//         echo chr(65+$j-1);
//     }
    
//     echo "<br>";
// }
//pattern 10
 
// for($i=5;$i>=1;$i--){
//     for($j=0;$j<=$i;$j++){
//         echo "&nbsp&nbsp";
//     }
//     $j--;
//     for($k=0;$k<=(5-$j);$k++){
//         echo chr(65+$k);
//     }
//     echo "<br>";
// }
 //pattern 11
//  $num=1;
//  for($i=1;$i<=5;$i++){
//     for($j=1;$j<=$i;$j++){
//         echo chr(97+$num-1)." ";
//         $num++;
//     }
//     echo "<br>";
//  }
 //pattern 12
//  for($i=10;$i>=1;$i--){
//     for($j=0;$j<=$i;$j++){
//         echo "&nbsp";
//     }
//     $j--;
//     for($k=0;$k<=(10-$j);$k++){
//         echo"*";
//     }
//     echo "<br>";
// }

//pattern 13
// for($i=0;$i<=5;$i++){
//     for($j=5;$j>$i;$j--){
//         echo "*";
//     }
//     echo "<br>";
// }
//pattern 14
// for($i=5;$i>=1;$i--){
//     for($j=$i;$j<5;$j++){
//         echo "&nbsp;&nbsp";
//     }
//     for($k=1;$k<=$i;$k++){
//         echo chr(65+$k-1);
//     }
//     echo "<br>";
// }
// $input=5;
// function pattern($a){
//     for($i=5;$i>=1;$i--){
//         for($j=$i;$j<=5;$j++){
//             echo chr(97+$j-1);
//         }
//         echo "<br>";
//     }
// }
// pattern($input);


// $num=5;
// for($i=$num;$i>=1;$i--){
//     for($j=$i;$j<=$num;$j++){
//         echo chr(97+$j-1);
//     }
//     echo "<br>";
// }

// function abc($a){
//     $num=$a;
//     $temp=$num;
//     $number=$num;
//     $len=strlen((string)$num);
//     $last=$num%10;
//     if($len%2==0){
//         echo "no middle digit";
//     }
//     else{
//         while ($number >= 10) {
//             $number /= 10;
//         }
//         $firstDigit=(int)$number;
//         for($i=1;$i<=(int)($len/2+1);$i++){
//             $c=(int)($temp%10);
//             $temp=(int)($temp/10);
//     }
//     $middleDigit=$c;
//     echo abs($firstDigit-$middleDigit)." ".abs($middleDigit-$last);
//     }

// }
// abc(85348)."<br>";

// $c=0;
// $a=1;
// $b=0;
// for($i=1;$i<=8;$i++){
// echo $c." ";
// $c=$a+$b;
// $a=$b;
// $b=$c;

 
// }
// function abc($a){
// $a=" hello";
// }
// // $str="hi";
// abc($str);
// echo $str;


// function fact($a){
//  //base case
//  if($a==0){
//     return 1;
//  }
//  else{
//     return $a*fact($a-1);
//  }

// }



// $num=5;
// echo fact($num);

$a=0;
$b=1;
$c=0;

for($i=0;$i<=8;$i++){
echo $c." ";
$a=$b;
$b=$c;
$c=$a+$b;
}




?>