<?php
// $name=$_GET['name'];
// print_r("hello ".$name);
//=====================================
// echo "--------------------------------------------------".'<br>';
// function Add($x,$y){
//     return $x+$y;
// }
// function multply($x,$y){
//     return $x*$y;
// }
// function Sub($x,$y){
//     return $x-$y;
// }
// $x = 5;
// $y = 10;
// print("$x + $y = " . Add($x, $y) . "<br>");
// print("$x * $y = " . Multply($x, $y) . "<br>");
// print("$x - $y = " . Sub($x, $y));
// echo "--------------------------------------------------".'<br>';
// function Difference($A,$B,$C,$D){
//    if(min($A,$B,$C,$D)>=-10**5&&max($A,$B,$C,$D)<=10**5){
//         return ($A*$B)-($C*$D);
//     }
   
// }
// $res=Difference(1,2,3,4);
// echo "Difference = ".$res;
// echo "--------------------------------------------------".'<br>';
// $num1=13;
// $num2=12;
// $num1_digit=str_split((string)$num1);
// // echo $num1_digit[0];
// $num2_digit=str_split((string)$num2);
//     if(min($num1,$num2)>=0**5&&max($num1,$num2)<=10**18){
//         echo "result =".$num1_digit[1]+$num2_digit[1];}
//         else{
//             echo "tne number not allowed to use";
//         }
// echo "--------------------------------------------------".'<br>';
// $num=$_GET['num'];
// $num_digit=str_split((string)$num);
// if($num_digit[0]%2==0){
//     echo "EVEN";

// }
// else{
//     echo "ODD";
 
// }
// echo "--------------------------------------------------".'<br>';

// $a=$_GET['a'];
// $b=$_GET['b'];
// $k=$_GET['k'];
// if($a%$k==0&&$b%$k==0){
//     echo "BOTH";
// }
// elseif($a%$k==0&&$b%$k!=0){
//     echo "Memo";
// }
// elseif($a%$k!=0&&$b%$k==0){
//     echo "Momo";
// }
// elseif($a%$k!=0&&$b%$k!=0){
//     echo "NO ONE";
// }
// // else{
// //     echo "NO"
// // }
// echo "--------------------------------------------------".'<br>';
$num1=$_GET['num1'];
// $num2=$_GET['num2'];
$num1_digit=str_split((string)$num1);
// $num2_digit=str_split((string)$num2);
if ($num1 >= 10 && $num1<= 99){
if($num1_digit[0]%$num1_digit[1]==0||$num1_digit[1]%$num1_digit[0]==0){
    echo "YES";
}
else{
    echo "NO";
}}

?>