<?php
//function in string

$str="phpcoursehere hi hello";

//length count in string
// echo strlen($str);
// echo str_word_count($str);
// echo substr_count($str,"phpcoursehere"); //find no of specific substring froma string

// echo strtolower($str);
// echo strtoupper($str);

// functions for position found in string
//  echo strpos($str,"Hi"); //first occurance of string and case sensitive
//  echo stripos($str,"hi"); //first occurance of string and case insensitive

//last occurance of string and case sensitive
//  echo strrpos($str,"Hi"); 
// last occurance of string and case insensitive
// echo strripos($str,"hi"); 

//function for string search
// echo strstr($str,"Hi"); // search the first occurance of character and return the rest of string
// echo stristr($str,"hi"); // search the first occurance of character and return the rest of string but case insensitive

// echo strchr($str,"Hi",true); //return first occurance of string and return before the first occurance
// echo strrchr($str,"hi"); //return last occurance of string and return all the characters from this positions to the end of string
// search a string of any of the specified character and return rest of the string and case sensitive
// echo strpbrk($str,"ci");
// /search a string of any of the specified character and return rest of the string and case insensitive
// echo strpbrk($str,"Po");

//substring in string
// echo substr($str,3,6);
// echo substr($str,0,3);

//string replace 
// str_replace(find,replace,string)-case sensitive(format)
//  echo substr_replace($str,"python",3,7);
// echo str_replace("Hi","hey",$str);
// case insensitive
// echo str_ireplace("hi","hello",$str); 

//  replace by array
// $find=[" "]; //case sensitive
// $replace=["tr"];
// echo str_replace($find,$replace,$str);



//functions for string -- ord(string),chr(ascii)
// echo ord('A')."<br>";
// echo chr(104);

// functions for hex to bin and bin to hex
// echo bin2hex('A'); //convert ascii character to hex




//function for string trim- trim(string,charlist(optional)) ,rtrim(string,charlist), ltrim(string,charlist) , chop(same as rtrim)
//for whitespace remove by using trim- trim(string)
//removing before and after spaces
// echo trim($str);
// echo $str;
// echo ltrim($str,"phpcoursehere");//remove left string
// 

//reverse of a string
// echo strrev($str);

//return array from a string with specified difference
// $str1="hello";
//  $a=explode("he",$str1);
//  print_r(($a));
// return a array to string
// $a1=array("hi","hello");
// print_r($a1)."<br>";
// $a2=implode($a1);
// var_dump($a2);



 //function string for repeat- 
//  echo str_repeat("wow",13);
// shuffle the string and generate new string every time
// echo str_shuffle($str);
$str="phpcoursehere";
//spliting the string upto to no and print the array out of that string
// $a=str_split($str,3);
// print_r($a); 

//split the string and and with given special character
// echo chunk_split($str,3,"--");
 


//functions in php for compare string(return 0 if both strings atr equal,return 1(or any positive value) if 1st string>2nd string, return -1 if  2nd string>1s1t string)
//strcmp case sensitive
// echo strcmp("he","hello");

//strncmp (n=length(matching according to length(str,str,length)))
// echo strncmp("Hello","HelLo",3);

//strcasecmp (case insensitive)
// echo strcasecmp("hi","Hi");

//strncasecmp (length with case insensitive,n=length)
// echo strncasecmp("hikehello","Hikehello",4);

//strnatcmp(natural algorithm compare string with integer)
// echo strnatcmp("4hi","4hi");

//strnatcasecmp (natural algorithm compare string with integer with case sensitive)
// echo strnatcasecmp("4hi","4Hi");

//substr_compare(str1,str2,start,length(optional).case(false(case sensitive)/true))
echo substr_compare("helloo world","hello world",0);
// compare char and spaces of string
// echo similar_text("hi","hi") ;


?>