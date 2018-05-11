

<?php
    session_start();
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Page</title>

	<link rel="stylesheet" href="styles/demo.css">
	<link rel="stylesheet" href="styles/form-basic.css">

</head>


	<header>
		<h1> Login Page </h1>
    </header>

    <div class="main-content">

        

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" action="includes/login.inc.php" method="POST">
            
            <div class="form-title-row">
                <h1>Login Here</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Username</span>
                    <input type="text" name="uid" placeholder="Username">
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Last Name</span>
                    <input type="text" name="pwd" placeholder="password">
                </label>
            </div>

            <div class="form-row">
                <button type="submit" name="submit"> Login </button>
            </div>

        </form>
        <a href="signup.php"> Sign Up </a>
    </div>

</html>
