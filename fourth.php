<?php include "menu.php" ?>
<h1>Functions</h1>
<?php
function calculate_sum($a, $b){
  return $a+$b;
}
$result=calculate_sum(3,5);
echo 'The sum is '.$result;
 ?>
<?php include "footer.php" ?>
