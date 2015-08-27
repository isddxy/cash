<?php

$char_1 = $_COOKIE['char_1'];
$rate_1 = $_COOKIE['rate_1'];
		
include ("bd.php");

$query = "SELECT * FROM `money` WHERE `char` = '$char_1' ";
$result = mysql_query($query);
$row = mysql_fetch_array($result);




$rate_2 = $row['rate'];

$sum = $rate_1 * $rate_2;

setcookie("rate_2",$sum,time()+3600);

echo $char_1."<br>";
echo $row['rate'].'<br>';
echo $sum;	

//тест теткт github

?>