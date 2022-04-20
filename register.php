<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="form.css">
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
<div class="signup-form">
    <br><br><br>
    <form action="register_a.php" method="post" enctype="multipart/form-data">
        <center>
        <b>
		<h2 style="font-size:75px">Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="wrapper">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="wrapper">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="wrapper">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>      
        <div class="wrapper">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="wrapper">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </b>
    </center>
    </form>
	
</div>
</body>
</html>