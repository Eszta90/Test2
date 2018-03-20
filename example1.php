<?php 

function oddavarage($numbers) {

$sum =0;
$count=0;
foreach ($numbers as $x) {

if ( $x % 2 != 0)  {
$count++;
$sum = $sum + $x;


}

}

return $sum/$count;


}
$xvalue = array(-3, -2, -1, 0, 1, 2, 3, 5, 7, 9, 13, 27);
echo oddavarage($xvalue);

?>

