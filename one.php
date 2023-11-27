<?php
// 1

// function one($one ,$two , $three){
//     $dia = $one+$two;
//     $fin = $dia*$three;
//     return $fin;
// }
// echo one(3,2,3) . "<br>";


// 2

// function two($height){
//     $length = 5;
//     $width = 10;
//     $size = $length*$width*$height;
//     return $size;
// }
// echo two(4). "<br>";


// 3

// function three($hours){
//     $sec = $hours*60*60;
//     return $sec;
// }
// echo three(3). "<br>";


// 4

// function four($base, $height){
//     $area = .5*$base*$height;
//     return $area;
// }
// echo four(4,5). "<br>";


// 5

// function five($years){
//     $days = $years*12*30;
//     return $days;
// }
// echo five(2). "<br>";


// 6

// function getlen(){
//     $str = "Get the length of this sentence";
//     $len = strlen($str);
//     return $len;
// }
// echo getlen(). "<br>";


// 7

// function getlenwi(){
//     $str = "Get the length of this sentence without spaces";
//     $rev = str_replace(" ","",$str);
//     $len =  strlen($rev);
//     return $len ;
// }
// echo getlenwi(). "<br>";


// 8

// function getcount(){
//     $lon = "Get the number of words in this sentence";
//     $count = str_word_count($lon);
//     return $count ;
// }
// echo getcount(). "<br>";


// 9

// function check(){
//     $str = "Check if this word (by) exists in the string or not";
//     $che = str_contains($str,"by");
//     if($che == 1 && $che == true ){
//         echo "yes";
//     }
//     else{
//         echo "no";
//     }
// }
// echo check(). "<br>";


// 10

// $str = "Get the word (EraaSoft) from the string and print it." ;

// $con = str_contains($str , "EraaSoft");
// if($con == 1){
//     echo "EraaSoft". "<br>";
// }
// else{
//     echo "not here". "<br>";
// }


// 11

// function rem(){
//     $str = "Remove the word (by) from the string and print the string with and without (by)";
//     $rev = str_replace("by","",$str);
//     return $rev;
// }
// echo rem(). "<br>";




// 12
// 13

// $string_one = "Eraa"; 
// $string_two = "Soft";

// $full_string = $string_one . $string_two ;
// echo $full_string . "<br>" ;
// if($full_string== "EraaSoft"){
//     echo "same". "<br>";
// }
// else{
//     echo "non". "<br>";
// }


// 14

// function cin(){
//     $str = "ErraSoft";
//     $arrs = str_split($str, 2);
//     $con =count($arrs);
//     for($i=0; $i < $con; $i++){
//         $x = $arrs[$i];
//         echo $x . "/" ;
// }

// }
// echo cin() . "<br>";


// 15

// function tch($num){
//     if($num % 2 == 0){
//         echo "even". "<br>";
//     }
//     else{
//         echo "odd". "<br>";
//     }
// }
// echo tch(6);


// 16

// function sec($str){
//     $len = strlen($str);
//     if($len%2 == 0){
//         echo "even". "<br>";
//     }
//     else{
//         echo "odd". "<br>";
//     }
// }
// echo sec("hmo");


// 17

// $description = "no pain , no gain ";

// $ch1gain = str_contains($description , "gain");
// $ch2peen = str_contains($description , "peen");

// if($ch1gain == true || $ch2peen == true){
//     echo "success word". "<br>";
// }
// else{
//     echo "wrong word". "<br>";
// }


// 18

// function boolean($bol){
//     if($bol == true && $bol == 1){
//         echo 0;
//     }
//     elseif($bol == false && $bol == 0){
//         echo 1 ;
//     }
// }

// echo boolean(0). "<br>" ;

// 19

// function gus($str){
//     $rev = str_replace(" ","",$str);
//     $spl =  str_split($rev, 1);
//     $last = count($spl)-1;
//     if($spl[$last] == "s" ){
//         echo "plural";
//     }
//     else{
//         echo "Singular";
//     }
// }
// echo gus("cookies"). "<br>";


// 20

// function calculator($Operator,$num1,$num2){
    
//     if($Operator == "+"){
//         echo $num1 + $num2 ;
//     }
//     elseif($Operator == "-"){
//         echo $num1 - $num2 ;
//     }
//     elseif($Operator == "*"){
//         echo $num1 * $num2 ;
//     }
//     elseif($Operator == "/"){
//         if($num2 == 0){
//             echo "error" ;
//         }
//         else{
//             echo $num1 / $num2 ;
//         }
        
//     }
//     elseif($Operator == "**"){
//         echo $num1 ** $num2 ;
//     }
//     elseif($Operator == "%"){
//         echo $num1 % $num2 ;
//     }
// }
// echo calculator("/",6,0). "<br>";

