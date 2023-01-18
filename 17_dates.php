<?php
echo "Welcome to world of dates.<br>";
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$d = date("jS F o");
$e = date("h:i:i A");
echo "Today's date is $d. <br>";
echo "Now time is $e. <br>";
// $date = date_create('2000-01-01');
// echo date_format($date, 'Y-m-d H:i:s A');
?>