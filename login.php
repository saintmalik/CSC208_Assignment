<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="contact-form-layouts">
<h5 class="cont-form">Student Registration Form</h5>
<form method="post" action="register.php" class="register-wthree form-group">
<?php include('error.php'); ?>
<div class="form-group">
<label for="username">Username/Matric No:</label>
<input class="form-control" type="text" placeholder="Matric Number" id="username" name="username" required data-error="Please enter your Username">
</div>
<div class="form-group ">
<label>Password</label>
<input class="form-control " type="password" placeholder="********" name="password" required>
</div>
<div class="form-group">
<button type="submit" name="reg_user" class="mt-4 btn btn-w3layouts btn-block btn-success text-white w-100 font-weight-bold text-uppercase ">Create Account</button>
</div>
</form>
<p class="lol">
<a href="/index.php">Signed Up Already? Login!</a>
</p>
</div>
</div>
    
</body>
</html>