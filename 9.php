<?php
Header(‘Content-Type:text/plain’);
$allTheStates= “Mississippi Alabama Texas Massachusetts Kansas”;
$statesArray=[];
$states1=explode(‘ ’,$allTheStates);
$i=0;
//States that ends with XAS
foreach ($states1 as $state) {
 if (preg_match('/xas$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "\nThe states that end with xas:" . $state;
 }
 }
//States that begins with K and ends in S
foreach ($states1 as $state) {
 if (preg_match('/^k.*s$/i', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1;
 echo "\nThe states that begins with k ans ends in s:" . $state;
 }
 }
//states that begins with M and ends in s
 foreach($states1 as $state) {
 if (preg_match('/^M.*s$/', ($state))) {
 $statesArray[$i] = ($state);
 $i = $i + 1; 
echo "\nThe states that begins with M and ends in s:" . $state;
 }
 }
//states that ends in a 
foreach($states1 as $state) {
if (preg_match('/a$/', ($state))){ 
$statesArray[$i] = ($state);
 $i = $i + 1;
 echo "\nThe states that ends in a:" . $state;
 }   
}
 foreach ($statesArray as $element => $value) {
 print( "\n" . $value . " is the element " . $element); 
}
 ?>
