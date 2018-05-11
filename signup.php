<?php

?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sign Up Page</title>

	<link rel="stylesheet" href="styles/demo.css">
	<link rel="stylesheet" href="styles/form-basic.css">

</head>


	<header>
		<h1> Sign Up Page </h1>
    </header>

    <div class="main-content">


        <form class="form-basic">
            
            <div class="form-title-row">
                <h1>Sign Up Here</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>First Name</span>
                    <input type="text" name="first" placeholder="First Name" id="firstName">
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Last Name</span>
                    <input type="text" name="last" placeholder="Last Name">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" placeholder="email">
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Username</span>
                    <input type="text" name="uid" placeholder="Username">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Password</span>
                    <input type="text" name="pwd" placeholder="Password">
                </label>
            </div>
            <!--
            <div class="form-row">
                <label>
                    <span>Phone Number</span>
                    <input type="text" name="name">
                </label>
            </div>

            
            <div class="form-row">
                <label>
                    <span>Date</span>
                    <input type="date" name="date">
                </label>
            </div>
            
            <div class="form-row">
                <label>
                    <span>Dropdown</span>
                    <select name="dropdown">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </label>
            </div>
            ____________________________________________________

           
            -->

            <div class="form-row">
                <button name="submit" value="Submit" >Sign Up</button>
            </div>

        </form>
        <a href="loginpage.php"> Log In Page </a>
    </div>
    

</html>
