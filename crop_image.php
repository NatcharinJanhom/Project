<?php
$data = $_POST['imagebase64'];
list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);

date_default_timezone_set("Asia/Bangkok");

list($usec, $sec) = explode(" ", microtime());
$time =(float)$usec + (float)$sec;
list($usec, $sec) = explode(".", $time);
$name =date("dmyHis").$usec.$sec;
file_put_contents('temp_pic/'.$name.'.png', $data);
header('Content-type: application/json');
print json_encode("temp_pic/".$name.".png");
?>