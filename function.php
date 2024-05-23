<?php

// functions in php

// function with pass by values
// function abc($a){
//     $a+=6;
// }

// $num=10;
// abc($num);
// echo $num;




// function with pass by reference(address)
function abc(&$a){
    $a+=6;
}

$num=10;
abc($num);
echo $num;



?>