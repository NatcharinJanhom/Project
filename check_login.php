<?php 
require_once("connect_db.php");

$sql = "SELECT username,password,permission FROM member " ;
$qr = $conn->prepare($sql);
$qr->execute();

$login_username = $_POST['username'];
$login_password = md5($_POST['password']);
//echo "<br>".$login_password."<br>" ;

$datetime_login = date("Y-m-d H:i:s");

while($result = $qr->fetch(PDO::FETCH_ASSOC)){
	/*
	echo "<br>".$result['username']."<br>";
	echo md5($result['password'])."<br>";
	echo md5($result['password']);
	*/
	if($login_username == $result['username'] && $login_password == $result['password']){
		//echo "Login Success!";
		$insert_date = "UPDATE member SET login_date = now() WHERE username = '$login_username' ";
		$conn->query($insert_date);
		$_SESSION['username'] = $login_username ;

		if($result['permission'] == 'member'){
			$_SESSION["type"] = 'user' ;
			header( "location: userpage.php" );
		}

		elseif($result['permission'] == 'admin'){
			$_SESSION["type"] = 'admin' ;
			header( "location: admindetal_asree.php" );
		}

		elseif($result['permission'] == 'expert'){
			$_SESSION["type"] = 'expert' ;
		}

		else{
			$_SESSION["type"] = NULL ;
			header( "location: userpage.php" );
		} 
		
 		exit(0);
	}
}

	header( "location: index.php" );
 	exit(0);

 ?>