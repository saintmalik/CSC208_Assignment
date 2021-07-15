<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>CSC 208 Web Programming Group Assignment</title>
  <meta name="author" content="Abdulmalik" />
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="strap.css">
</head>

<body>
  <?php
  $errors = array();

  // connect to the database
  $db = mysqli_connect('', '', '', '');

  // REGISTER USER
  if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $groupof = mysqli_real_escape_string($db, $_POST['groupof']);
    $sex = mysqli_real_escape_string($db, $_POST['sex']);
    $phonenum = mysqli_real_escape_string($db, $_POST['phonenum']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $nxtkin = mysqli_real_escape_string($db, $_POST['nxtkin']);
    $phonenum_nxtkin = mysqli_real_escape_string($db, $_POST['phonenum_nxtkin']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM students WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
      if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
      }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database
      $sql1 = "INSERT INTO `students`(`username`, `name`, `groupof`, `sex`, `phonenum`, `email`, `address`, `nxtkin`, `phonenum_nxtkin`) VALUES ('$username', '$name', '$groupof', '$sex', '$phonenum', '$email', '$address', '$nxtkin', '$phonenum_nxtkin')";
      $sql2 = "INSERT INTO `users`(`username`, `password`) VALUES ('$username', '$password')";
      mysqli_query($db, $sql1);
      mysqli_query($db, $sql2);
      // $success = 'Account Created Successfully';
      array_push($errors, "Account Created Successfully!" );
    }
  }
  ?>
  <div class="container">
    <div class="contact-form-layouts">
      <h5 class="cont-form">CSC 208 Edu Group 1 Registration Form</h5>
      <form method="post" action="" class="register-wthree form-group">
        <?php include('error.php'); ?>
        <div class="form-group">
          <label for="username">Username/Matric No:</label>
          <input class="form-control" type="text" placeholder="Matric Number" id="username" name="username" required data-error="Please enter your Username">
        </div>
        <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" placeholder="Your Name" id="name" name="name" required data-error="Please enter your name">
        </div>
        <div class="form-group">
          <label for="group">Group</label>
          <input class="form-control" type="text" placeholder="Your Group" id="groupof" name="groupof" required data-error="Please enter your name">
        </div>
        <div class="form-group">
          <label for="sex">Sex</label>
          <input class="form-control" type="sex" placeholder="Sex" id="sex" name="sex" required data-error="Please enter your name">
        </div>
        <div class="form-group">
          <label for="phonenum">Phone Number</label>
          <input class="form-control" type="tel" placeholder="+23480000000" id="phonenum" name="phonenum" required>
       </div>
       <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" placeholder="example@gmail.com" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <textarea class="form-control" rows="3" placeholder="Enter your address" required data-val="true" data-val-required="The Description field is required." id="address" name="address"></textarea>
        </div>
        <div class="form-group">
          <label for="nextofkin">Next of Kin</label>
          <input class="form-control" type="text" placeholder="Next Of Kin" id="nxtkin" name="nxtkin" required data-error="Enter your next of kin">
          <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
          <label for="phonenum_nxtkin">Next of Kin Phone Mobile</label>
          <input class="form-control" type="tel" placeholder="+23480000000" id="phonenum_nxtkin" name="phonenum_nxtkin" required>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input class="form-control" type="password" placeholder="********" name="password_1" required>
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input class="form-control" type="password" placeholder="********" name="password_2" required>
        </div>
        <div class="form-group">
          <button type="submit" name="reg_user" class="mt-4 btn btn-w3layouts btn-block btn-success text-white w-100 font-weight-bold text-uppercase">Create Account</button>
        </div>
      </form>
      <br/>
      <p class="lol">
        <a href="login.php">Signed Up Already? Login!</a>
      </p>
    </div>
  </div>
</body>

</html>
