<?php
$data = $_POST['image'];


list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);


$data = base64_decode($data);
$imageName = time().'.jpg';
file_put_contents('uploadimage/'.$imageName, $data);


echo 'done';
?>