<?php

function Binary_Search(array $lisst,int $target){

    $low = 0;
    $high = count($lisst) - 1;
    	
    while ($low <= $high){
      $mid = floor(($low + $high) / 2);
    	
    	if ($target == $lisst[$mid]){
    	  return $mid;
    	}
    	elseif ($target < $lisst[$mid]){
        // 	echo "$mid index is too L0000W ";
        	$high = $mid - 1;

    	}
    	elseif ($target > $lisst[$mid]){
        // 	echo "$mid index is too HI9999H ";
        	$low = $mid + 1;
    	}
    }
    return -1;
}

$element = 12;
$aarray = [1,2,3,4,5,8,11,12,13,15,20,30,40,50];
$bin = Binary_Search($aarray,$element);

// echo $bin;
if ($bin == -1){
  echo "Element [$element] Not Found";
}
else {
  echo "your number [$element] found at index $bin ";
}
?>