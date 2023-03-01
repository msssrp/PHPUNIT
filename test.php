<?php 


include "calculate.php";

$cal = new Calculate();

$total = $cal->addNumber(5,6);
echo "result".$total;

?>