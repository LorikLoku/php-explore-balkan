<?php 

	session_start();

	include 'php/connection.php';
	include 'php/functions.php';
	if(isset($_POST['submit'])){
		include 'php/loginValidation.php';
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../IW/css/register.css"> 
    <!-- Ja kum dhon CSS register.css per arsye se e kan te njejte CSS-in -->
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Log In</h2>
        </div>

        <form action="#" method="POST" id="form" class="form">
            <div class="form-control">
                <label for="username">Email</label>
                <input type="text" placeholder="Type email" id="email" name="email" />
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username">Password</label>
                <input type="password" placeholder="Type password" id="password" name="password" />
                <small>Error message</small>
            </div>
            <button value="Submit" name="submit">Submit</button>
            <br>
            <span>You don't have an account? - <a href="../IW/register.php">Register</a></span>
        </form>
    </div>

    <script src="../IW/js/login.js"></script>
</body>
</html>