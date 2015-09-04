<?php
$num = $_POST['num'];

if (is_numeric($num) == false)
//setType($num, 'double');
//if (!$num)
{
	echo 'please insert a number';
	exit;
}
else
{
	echo 'INPUT: ' . $num .'<br>';
	echo 'abs: ' . abs($num) . '<br>';
	echo 'round: ' . round($num) . '<br>';
	echo 'ceil: ' . ceil($num) . '<br>';
	echo 'floor: ' . floor($num) . '<br>';
}
?>