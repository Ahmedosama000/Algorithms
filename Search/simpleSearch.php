<?php

function Simple_Search(array $lists , $num){
  
  foreach ($lists as $index => $target){
    // echo $list;
    if ($target == $num){
      return $index;
    }
  }
  return -1;
}

$num = 40;
$lists = [10,20,30,40,50,60,70,80,90,100,110];

$search = Simple_Search($lists , $num);

if ($search == -1){
  echo "[$num] N000t F0und";
}
else {
  echo "[$num] Found at index [$search]";
}
?>