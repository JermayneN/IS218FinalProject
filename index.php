
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Home</title>

	<link rel="stylesheet" href="styles/demo.css">
	<link rel="stylesheet" href="styles/form-basic.css">

</head>


	<header>
		<h1> Home </h1>
    </header>

    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" action="includes/signup.inc.php" method="POST">
            
            <div class="form-title-row">
                <h1>Home</h1>
                <?php
                    if(isset($_SESSION['u_id'])){
                        echo "You are logged in!";
                    }
                ?>
            </div>
        </form>
         
    </div>

</html>
