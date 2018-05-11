<?php
try{
	$con = new PDO ("mysql:host=sql1.njit.edu;dbname=jdn23","jdn23","fyeZNMOz");
    echo "connected!";

	
	if(isset($_POST['signup'])){
		$first = $_POST['name'];
		$last= $_POST['last'];
		$email= $_POST['email'];
		$user= $_POST['user'];
		$pass= $_POST['pass'];

		$insert= $con->prepare("INSERT INTO loginsystem (first,last,email,user,pass) values(:first,:last,:email,:user,:pass) ");

		$insert->bindParam(':first',$first);
		$insert->bindParam(':last',$last);
		$insert->bindParam(':email',$email);
		$insert->bindParam(':user',$user);
		$insert->bindParam(':pass',$pass);
		$insert->execute();
	}
}
catch(PDOException $e)
{
	echo "error".$e->getMessage();
}
?>

<form method="post">

<input type="text" name="first" placeholder="First Name">
<input type="text" name="last" placeholder="Last Name">
<input type="text" name="email" placeholder="Email">
<input type="text" name="user" placeholder="Username">
<input type="text" name="pass" placeholder="Password">

<input type="submit" name="signup" value="SIGN UP">

</form>