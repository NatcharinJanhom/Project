<?php 
session_start();
require_once("connect_db.php");
$login_username = $_POST['username'];
$login_password = md5($_POST['password']);
$sql = "SELECT * FROM member WHERE username ='$login_username' && password = '$login_password'" ;
$qr = $conn->prepare($sql);
$qr->execute();
date_default_timezone_set("Asia/Bangkok");
$datetime_login = date("Y-m-d H:i:s");
$result = $qr->fetch(PDO::FETCH_ASSOC);
if($qr->rowCount()){
		$_SESSION['member'] = $result;
		$insert_date = "UPDATE member SET login_date = now() WHERE id_member = ".$result['id_member'];
		$conn->query($insert_date);
		
		if($result['permission']=='admin')
		{
			header( "location: admindetal_asree.php" );
		}
		else if($result['permission'] == 'member')
		{
			header( "location: userpage.php" );
		}
		else if($result['permission'] =='expert'){
			header( "location: userpage.php" );
		} 

}
else
{
	header( "location: index.php" );
}
 ?>