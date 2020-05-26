<?php
function bai($max){
    echo $max * 2;
} 
bai(2);
bai(3);
?>

<?php
function f($a, $b){
 echo $a + $b;
 }
 f(7,8);
 f(9,10);
?>

<?php
 function d($arr){
     $e = array(1,3,5,7,9);
     foreach($e as $f){
         echo $f * $arr;
     }
 }
 d(7);
 d(9);
 ?>
 
 <?php
 function max_array($arr){
     
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 if($max_number < $a){
     $max_number = $a;
 }
 }
 return $max_number;
 }
 $arr = [4,6,2,7];
 echo max_array($arr);
 $arr = [6,9,4,10];
 echo max_array($arr);
 ?>
 
 <?php
$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents;
//htmlタグを削除して表示

$fruits = array('apple', 'orange', 'melon');
array_push($fruits, 'banana', 'pineapple');
foreach($fruits as $fruit){
 echo $fruit;
}
//配列の要素を追加する

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
//配列を結合する 
$array4 = array_merge($array1, $array2, $array3);
foreach($array4 as $array5){
 echo $array5;
}

$timestamp = mktime();
echo $timestamp;
//1970年1月1日から経過した時間（毎時）

$date1 = date('Y/m/d');
echo $date1;
//日付を表示('Y/m/d')で年月日を表示することができる