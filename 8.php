A
<?php
extract($_POST);
if(isset($save))
{
switch($ch)
{
case '+':
$res=$fn+$sn;
break;
case '-':
$res=$fn-$sn;
break;
case '*':
$res=$fn*$sn;
break;
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Calculator- switch</title>
</head>
<body>
<form method="post">
<table border="1" align="center">
<caption><h2> Simple Calculator </h2></caption>
<tr>
<th>Your Result</th>
<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo 
@$res;?>"/></th>
</tr>
<tr>
<th>Enter your First num</th>
<th><input type="number" name="fn" value="<?php  echo @$fn;?>"/></th>
</tr>
<tr>
<th>Enter your Second num</th>
<th><input type="number" name="sn" value="<?php  echo @$sn;?>"/></th>
</tr>
<tr>
<th>Select Your Choice</th>
<th>
<select name="ch">
<option>+</option>
<option>-</option>
<option>*</option>
</select>
</th>
</tr>
<tr>
<th colspan="2">
<input type="submit"
name="save" value="Show Result"/>
</th>
</tr>
</table>
</form>
</body>
</html>

B
<?php
 $a = array(array(1,2,3),array(4,5,6),array(7,8,9)); 
 $b = array(array(7,8,9),array(4,5,6),array(1,2,3));
 $m=count($a);
 $n=count($a[2]);
 $p=count($b);
 $q=count($b[2]);
 echo "the first matrix :"."<br/>";
 for ($row = 0; $row < $m; $row++) { 
for ($col = 0; $col < $n; $col++) echo " ".$a[$row][$col]; echo "<br/>"; 
}
 echo "the second matrix :"."<br/>";
 for ($row = 0; $row < $p; $row++) { 
for ($col = 0; $col < $q; $col++) echo " ".$b[$row][$col]; echo "<br/>";
 } 
echo "the transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < $m; $row++) {
 for ($col = 0; $col < $n; $col++) echo " ".$a[$col][$row]; echo "<br/>"; 
} 
if(($m===$p) and ($n===$q)) {
 echo "the addition of matrices is:"."<br/>";
 for ($row = 0; $row < 3; $row++) {
 for ($col = 0; $col < 3; $col++) 
echo " ".$a[$row][$col]+$b[$row][$col]." ";
 echo "<br/>";
 }
 }
 if($n===$p){
 echo " The multiplication of matrices: <br/>"; 
$result=array();
 for ($i=0; $i < $m; $i++) {
 for($j=0; $j < $q; $j++){ 
$result[$i][$j] = 0; 
for($k=0; $k < $n; $k++) 
$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
 }
 }
 for ($row = 0; $row < $m; $row++) {
 for ($col = 0; $col < $q; $col++) 
echo " ".$result[$row][$col];
 echo "<br/>";
 }
 }
?>
