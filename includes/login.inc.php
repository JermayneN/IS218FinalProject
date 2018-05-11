<?php

if(isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysql_real_escape_string($conn, $_POST['uid']);
	$pwd = mysql_real_escape_string($conn, $_POST['uid']);

	//error handlers
	//check if empty 

	if (empty($uid) || empty($pwd) ){
		header("Location: ../loginpage.php?login=empty");
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_uid= '$uid' OR user_email='$uid";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck<1){
			header("Location: ../loginpage.php?login = error");
			exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				//De-hash the password 
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false){
					header("Location: ../loginpage.php?login= error");
					exit();
				}elseif($hashedPwdCheck == true){
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					header("Location: ../loginpage.php?login = SUCCESS");
					exit();
				}
			}
		}
	}
}else {
	header("Location: ../loginpage.php?login=error");
	exit();
}
	