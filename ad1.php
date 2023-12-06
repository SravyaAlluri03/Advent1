<?php

$s = "C:\\xampp\\htdocs\\PhpProject1\\newfile";
$str = fopen($s,"r");
$count = 0;
$sum = 0;
$a=0;
$tot = 0;
while (!feof($str)){
 $i = fgetc($str);
 if($i=="\n"){
     $sum = ($sum*10) + $a;
     $count=0;
     $tot = $tot + $sum;
     $sum = 0;
 }
 else{
     if($i>='0' && $i<='9'){
         if($count==0){
             $sum = $sum + $i;
             $count = $count + 1;
             $a = $i;
         }
         else{
             $a=$i;
         }
     }
 }
}
echo "sum: $tot";

?>

