<?php

$spaceString = "reverse this string but retain the exact spacing positions";
$spaceLength =  strlen($spaceString);
$reverseSpaceString = '';
$i = 0;
while ($spaceLength) {
  if($spaceString[$i] == " ") {
    $reverseSpaceString .= $spaceString[$i];
    $i++;
  } 
  
  if($spaceString[$spaceLength-1] != " ")  {
     $reverseSpaceString .= $spaceString[$spaceLength-1];
     $i++;
  }
  
  $spaceLength--;
} 

echo $reverseSpaceString;

?>