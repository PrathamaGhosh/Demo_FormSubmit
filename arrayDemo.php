<?php
// $a=array(10,20,30,"hi");
$array1=array(10,30,50,"hello"); //0 1 2 50 hello




// echo count($a);
// $a1=[10,20,30,"hi"];
//contant in php
//by default it's true can't change the assign value;
// define("name",25,true);
// $name1=26;
// echo $name1;
//indexed array here
// $a[0]="red";
// $a[1]="red5";
// $a[2]="red3";
// $a[3]="red2";


$a1=array(10,20,30,"phpcourse",40);

//  array_push($a1,"90") ;
// array_pop($a1);
//  array_shift($a1); //shift from the first elements of the array
//  array_unshift;
// $a2=array_reverse($a1);
// echo array_search(30,$a1);
 
//  $a2=array_replace($a1,[3=>"hi"]);
 
// for($i=0;$i<count($a2);$i++){
// echo $a2[$i]." ";
// }
// for($i=0;$i<count($a1);$i++){
//     echo $a1[$i]." ";
//     }

// $sub=array_slice($a1,0,3); //taking the sub array from original array





// unset($a1[2]);
// print_r($a1);
// for($i=0;$i<count($a1);$i++){
//     echo $a1[$i]." ";
//     }
// $val=78;
// var_dump($val);
// echo $find;



// echo sizeof($array1);
// unset($array1[2]);
// array_splice($array1,2,3,"phpcourse");
//  for($i=0;$i<count($array1);$i++){
//     echo $array1[$i]." ";
//     }
//removed


 //array_shift($a)//removed
//  array_unshift($a,"60"); //add first
 //array_reverse($a);
 //count($a);
  //finding the element from array
 //used to take two array arguments
// print_r($a1);// used to replaced two or more array or used to repllaced specifi elements


 // remove indexwise
//  var_dump($a);
 //removed for a position elements and add elements
// array_splice($a,2,0,"hello");//array_splice($a,offset,length,replacement)
// array_merge($a1,$a2);
 
 

//  echo "<table border=1>";
// foreach($a as $newa){

//     echo "<tr>";
//     echo "<td>".$newa."</td>";
//     echo "</tr>";
// }
// echo "</table>";
 




//array Indexing(multiple datatype can possible)
//echo $a[3];
//print_r to print array
// echo "<prep>";
// print_r($a);
// echo "<prep>";
//for loop to print array
// echo "<ul>";
// for($i=0;$i<4;$i++){
//     echo "<li>".$a[$i]."</li>";
// }
// echo "</ul>";
//associaative arrays
// $a=array("apple"=>"10","banana"=>20,"orange"=>30);
// echo $a["apple"];
// $a["apple"]=90;
// print_r($a);
//var_dump used to show the datatype of variable
// var_dump($a);

   //$keys=array_keys($a);
      //$keys=array_values($a);
//$key=array_flip($a);



//for each loop
// foreach($a  as $keys=> $value){
    //echo "{$key} ={$value}";
 
//     echo $keys.$value."<br>";
// }

//multidimensional array or nested array here-with row and column
$temp=array(  //outer array
    array(1,"riya",5000),//inner array
    array(2,"riyas",9000),
    array(3,"riyai",10000),
    array(4,"riyao",11000)
);
// print_r($temp);
// echo $temp[1][2];
// for($i=0;$i<4;$i++){
//     for($j=0;$j<4;$i++){
//       echo $temp[$i][$j]."<br>";
//     }
// }
// echo "<table border='1px' cellpadding='4px' cellspacing='0px'>";
//  echo "<tr>
//  <th>Id</th>
//  <th>Name</th>
//  <th>Salary</th>
//  </tr>";
// foreach($temp as $temp1){
//     echo "<tr>";
//     foreach($temp1 as $temp2){
//         echo "<td>".$temp2."</td>";
//     }
//     echo "</tr>";
     
// }
// echo"</table>";
// multidimensional associative array here
// $temp1=array(  //outer array
//     "apple"=>array("apple1"=>"10","banana1"=>20,"orange1"=>30),//inner array
//    "orange"=> array("apple2"=>"10","banana2"=>20,"orange2"=>30),
//     "banana"=>array("apple3"=>"10","banana3"=>20,"orange3"=>30),
//     "guava"=>array("apple4"=>"10","banana4"=>20,"orange4"=>30)
// );
// print_r($temp1);
// foreach($temp1 as $keys =>$values){
// echo $keys;
// foreach($values as $val2){
// echo $val2;
// }
// echo "<br>";
// }
// foreach loop with list-here we don't need to create nested for loops

// foreach($temp as list($a,$b,$c)){
// echo "$a $b $c";
// }

//functions in array
// echo count($temp);
// echo sizeof($temp);
// count of mul array
// $food=array(
// 'fruit'=>array('orange','banana','apple'),
// 'veggis'=>array('orange','banana','apple')
// );

// echo count($food['fruit'],1);//mod(by default 0 or 1) value count inner array
//count the duplicate element of array-print_r(array_count_values($food))
//functions for search in array- in_array()-gives 0 or 1,array_search- return index/key
// echo in_array(20,$a);

// function for array replace


//we 4 elements in our array
// echo $array1;
// print_r($array1);

// for($i=0;$i<count($array1);$i++){ //way of printing array element in php
//     echo $array1[$i]."<br>";
// }
// foreach($array1 as $array2){
//     echo $array2." ";
// }
//Associative array below
$arr=array("apple"=>"10","banana"=>20,"orange"=>"30");
// echo $arr["apple"];
//  var_dump($arr);
// foreach($arr as $key=>$values){
//     echo "$key: $values <br>";
// }


// echo $a1;
// print_r($a1);
// for($i=0;$i<count($a1);$i++){
//     echo $a1[$i]." ";
// }
// foreach($a1 as $a2){
//     echo $a2." ";
// }
// echo sizeof($a1);
 //Associative Array
 
//  $aval=array("apple"=>"1","banana"=>2,"orange"=>"90");
//  echo $aval["apple"];
// foreach($aval as $key=>$value){
//     echo "$key= $value"."<br>";
// }


?>
//write a program to print the following output
input:["90",67,"phpcourse",77]
output:[77,"welcomephp",67,"90",40];