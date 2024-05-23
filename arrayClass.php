<?php
// $a1=array(10,20,30,"phpcourse",40);


//Functions in array
//  array_push($a1,"90") ;//used to push last
// array_pop($a1);  //used to pop last
//  array_shift($a1); //shift from the first elements of the array
//  array_unshift;//used to add 0th index
// $a2=array_reverse($a1);//used to reverse
// echo array_search(30,$a1);//used to search index of element
//  $a2=array_replace($a1,[3=>"hi"]);//used to replaced element according to index and return an new array
// $sub=array_slice($a1,0,3); //taking the sub array from original array





// for($i=0;$i<count($a2);$i++){ //array traversing indexwise
// echo $a2[$i]." ";
// }
// echo sizeof($array);
// for($i=0;$i<sizeof($a1);$i++){
//     echo $a1[$i]." ";
//    }




// unset($a1[2]); //removed the element indexwise
// print_r($a1);
// for($i=0;$i<count($a1);$i++){
//     echo $a1[$i]." ";
//     }
// $val=78;
// var_dump($val);//var_dump used to show the datatype of variable






//Associative arrays(key associated with value)
// $a=array("apple"=>"10","banana"=>20,"orange"=>30);
// echo $a["apple"];
// $a["apple"]=90;
// print_r($a);
// var_dump($a);
// foreach($arr as $key=>$values){ //traversing the associative array
//     echo "$key: $values <br>";
// }



//multidimensional array or nested array here-with row and column
// $temp=array(  //outer array
//     array(1,"riya",5000),//inner array
//     array(2,"riyas",9000),
//     array(3,"riyai",10000),
//     array(4,"riyao",11000)
// );




// multidimensional associative array here
// $temp1=array(  //outer array
//     "apple"=>array("apple1"=>"10","banana1"=>20,"orange1"=>30),//inner array
//    "orange"=> array("apple2"=>"10","banana2"=>20,"orange2"=>30),
//     "banana"=>array("apple3"=>"10","banana3"=>20,"orange3"=>30),
//     "guava"=>array("apple4"=>"10","banana4"=>20,"orange4"=>30)
// );

// foreach loop with list-here we don't need to create nested for loops

// foreach($temp as list($a,$b,$c)){
// echo "$a $b $c";
// }




//write a program to print the following output
// input:["90",67,"phpcourse",77]
// output:[77,"welcomephp",67,"90",40];

// Solution
// $array=array("90",67,"phpcourse",77);
// $a1=array_replace($array,[2=>"welcomephp"]);
// array_unshift($a1,40);
// $array_new=array_reverse($a1);
// foreach($array_new as $a_new){
// echo $a_new." ";
// }


?>

