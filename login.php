<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="form.css">
<link rel="stylesheet" href="login">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>MARMAG</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
    <br><br>
<div class="signup-form">
    <center>
        <b>
    <form action="loginProcess.php" method="post" enctype="multipart/form-data">
		<h2 style="font-size:75px">Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="wrapper">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="wrapper">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="wrapper">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
    </form>
</b>
    </center>
</div>
</body>
</html>