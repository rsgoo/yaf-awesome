<?php
header("Content-type:text/html;charset=utf-8");
function bubble_sort($arr){
           $leng=count($arr);

           $temp="";

           if($leng<=1){

             return $arr;

           }else{
             for($i=0;$i<$leng-1;$i++){

                 for($j=0;$j<$leng-1-$i;$j++){

                     if($arr[$j]>$arr[$j+1]){

                         $temp=$arr[$j+1];

                         $arr[$j+1]=$arr[$j];

                         $arr[$j]=$temp;
                     }
                 }
             }
           }
           return $arr;
}
$myarr=array(3,5,4,1,-90,23,9,11);
print_r(bubble_sort($myarr));
 ?>
