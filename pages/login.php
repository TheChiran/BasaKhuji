<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../style/bootstrap.min.css">
  <link rel="stylesheet" href="../style/mdb.min.css">
  <link rel="stylesheet" href="../style/custom/login.css">
  <script src="../javascript/jquery.min.js"></script>
  <script src="../javascript/bootstrap.min.js"></script>
  <script src="../javascript/mdb.min.js"></script>
  <script src="../javascript/Custom/login.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-3 login-section card">
        <p class="login-heading">Login</p>
        <div class="login-form mt-5">
          <!-- Login form group -->
          <div class="alert alert-warning alert-dismissible fade show" role="alert" id="errorMsgBox" style="display: none;">
            <strong>Hey beauty/handsome!</strong> <span id="errorMessage">Can you fill all the fields please!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="alert alert-success alert-dismissible fade show" role="alert" id="successMsgBox" style="display: none;">
            <strong>Congrats!</strong> <span id="errorMessage">You have succesfully registered, have a nice day!</span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <!-- username input -->
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" autocomplete="off"
              id="username" placeholder="Please Enter Username">
            </div>
            <!-- Password input -->
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" autocomplete="off"
              id="userPassword" placeholder="Please Enter Password">
            </div>
          </form>
          <!-- Login form group -->
          <button class="btn btn-md btn-primary btn-block" id="login_btn" onclick="login()">Login</button>
          <p class="mt-2">Don't have account? <a href="register.php">Register</a></p>
          <p><a href="">Forgot password</a></p>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>



</body>

</html>