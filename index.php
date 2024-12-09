
<?php

#import files and libraries
include("connection.php");
include("global_variables.php");

# Log in user to their account
if (isset($_POST['login'])) {

  $email = $_POST['email']; #email from the user
  $password = $_POST['password']; #password entered by the user

  # Handle data validation
  if (empty($email))  {
    # if  email is empty, send an error message to the user
    # Email field is a required field and the user should 
    # always enter their email to login
      $error_message = "Email field can't be empty!";
  }
  else if (empty($password))
  {
    # password field can never be empty
    $error_message = "Password field can't be empty!";
  }
   else {
    # hash password before checking for password match
      $hashed_password = md5($password);

      # handle database query
      $sql = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$hashed_password'");
      
      # number of rows that match the above query
      $num_rows = mysqli_num_rows($sql);

      if ($num_rows == 1) {

        # if the credentials match
        # fetch data from the database
          $row = mysqli_fetch_assoc($sql);

          # add the data fetched from the database to session
          $_SESSION['user_id'] = $row['id'];  # session id of the logged in user
          $_SESSION['email'] = $row['email']; # session email of the user

          header("Location: dashboard.php"); # redirect the user to the dashboard

         
      } else {
          $error_message = "Invalid email or password!";
      }
  }
}

?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- css -->
   <style>
     .login-logo {
        font-size: 30px;
        font-weight: bold;
     }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <span>Chama Management System</span>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Please enter your credentials to log in.</p>

      <?php
            if (isset($error_message)) {
            echo '<div class="alert alert-danger">' . $error_message . '</div>';
            }
        ?>

      <form action="index.php" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-success btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>

</html>