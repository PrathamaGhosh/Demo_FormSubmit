<?php
//function in string-  split,chunk,UpperCase,LowerCase(strtoLower,strupperucfirst,ucwords,lcfirst)
//functions in str- Length-(strlen(str),str_word_count(string,return(0,1,2)),
// counting th word(substr_count(string,sbstring,start,end,length))) & Count
// functiobs for position found in string - strpos(string,find,start),strrpos(these are case sensitive),stripos,strripos(are not case sensitive)
//function for string search- strstr,stristr,strchr,strrchr,strrpbrk- return string here


// echo strlen($str);
// echo strtolower($str);
// echo substr_count($str,"those");
// echo str_word_count($str);
//  echo strpos($str,"phpcourse",0);



// $a=str_split($str,5);
// print_r($a); 

// $a=chunk_split($str,2,"--");
// echo $a;

// $a=strtoLower($str);
 
// echo $a[4];
// echo "<pre>";
// print_r($a);
// echo "</pre>";
// echo str_word_count($str);//only count array with zero space


// $a1=str_word_count($str,1);//return array
// $a1=str_word_count($str,2);
 
// print_r($a1);
// echo substr_count($str,"ph",1,10);// how many times hi is comming, from 1 to 10 how many times hi comming
// echo strpos($str,"ph");
// echo strrpos($str,"HI"); //case sensitive
// echo stripos($str,"HI");
// echo strripos($str,"theRE");

// $s=strstr($str,"hp");//case sensitive
// echo $s;
// $s=strchr($str,"hi",false);
// echo $s;
// $s=strrchr($str,"hi",false);//start from last and case sensitive
// echo $s;
// $s=stristr($str,"hi",false);//case insensitive
// echo $s;
// echo strrchr($str,"hi");
// echo strpbrk($str,"ih");

// function in string- substr(string,start,length)
// echo substr($str,-3);

//function for replace string-(str_replace(find,replace,string)-case sensitive,str_ireplace,substr_replace,strtr)
// echo str_replace("phpcourse","welcomephp",$str);
// $str="Hi thisis phpcourse";
//  echo substr_replace($str,"python",3,7);
// echo strstr($str,"course","hi");
// echo strstr($str,"co","he");
// echo strstr($str,$arr);
//replace by array
// $find=[" "," "]; //case sensitive
// $replace=["ty","tr"];
// echo str_replace($find,$replace,$str);


//functions for string -- ord(string),chr(ascii)
// echo ord('h');
// echo chr(104);

// functions for hex to bin and bin to hex
// echo bin2hex("A"); //convert ascii character to hex

// functions for encripted data 32 to 35% from a original string
// convert_uuencode(string);
// for decript the data
// convert_uudecode(string of encript data)

//function for string- md5(message digest algorithm) and sha(encription of data not decprition)
// echo md5(string,raw);// raw is true(raw 16 character into binary format) or false(32 character into hex number)
//echo sha1(string,raw)(US secure Hash algorithm)//more secure than md5(raw true - 20 character binary format, raw false-40 character hex number)
//function in string for form field sucurity- htmlentities(string,flags), html_entity_decode(string,flags)

//function for string - Addslashes(string,character) and Stripslashes(string)-add special slashes and remove special slashes for security in db for sqlinjection

//function for string trim- trim(string,charlist) , rtrim(string,charlist), ltrim(string,charlist) , chop(same as rtrim)
//for space remove by using trim- trim(string)
//removing before and after spaces
// echo ltrim($str,"!");


//strrev str_shuffle
//functions in php for compare string
//strcmp case sensitive
//strncmp n=length(matching according to length(str,str,length))
//strcasecmp case insensitive
//strncasecmp length with case insensitive
//strnatcmp(natural algorithm compare string with integer)
//strnatcasecmp
//substr_compare(str1,str2,start,length(optional).case(false(case sensitive)/true))
//substr_compare
//similar_text(str1,str2,percent) compare char and spaces of string
 
// echo strcmp("Hello","hello");

$str1="Hello World";
// echo str_replace(' ','',$str1);
// echo preg_replace(' ','',$str1);
// echo trim($str1,' ');
// echo strpos($str1," "); //return the index of position
//echo substr($srt1,0,3)
//echo str_padd($str1,10,"0")//padding with extra 10 character
// $str2=explode(' ',$str1);
// $first=$str2[0];
//  $second=$str2[1];

 
// echo strrev($first)." ".strrev($second);

//  echo trim($str1)."<br>";
// echo $str1;
//  echo strrev($str1);
//  $a=explode(' ',$str1);
//  $a1=array("hi","this","is","php");
//  print_r($a);
// echo implode($a1);
 





//strcmp,strncmp,strcasecmp,strnatcmp,strnatcasecmp,substr_compare,similar_text
 //function string for padding(to increase string length)- str_pad(string,length,pad_string,pad_type)
 //function string for repeat- str_repeat(string,repeat)
 //function for reverse string - strrev(string), str_shuffle(string)






// $count=0;
// for($i=0;$i<strlen($str);$i++){
//     $count++;
// }
// echo $count;
?>