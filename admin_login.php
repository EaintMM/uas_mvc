<?php
  include 'includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/admin-login-style.css">
    
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
  
  <nav class="navbar navbar-dark bg-dark">
  <h5 class="text-white">University Admission System</h5>
  </nav>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">UAS Admin Login</h1>
                  </div>
                  <div class="m-3">
                  <span class="text-muted small "> Login </span>
                  </div>
                  <form class="user">

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <input id="user" type="text" class="form-control bx" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i>
                    </span>
                    </div>
                    <input id="pass" type="text" class="form-control bx" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                  </div>


                    
                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                    <i class="fa fa-user" aria-hidden="true"></i>
                      Login
                    </a>
                  </form>
                  
                  <div class="">
                    <a class="small" href="register.html">Forgot password?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>


  <!-- Footer -->
<footer class="page-footer font-small blue fixed-bottom">

<!-- Copyright -->
<div class="footer-copyright bg-dark text-white small pl-4"> Copyright © 2019 CAMS. All rights reserved.
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
  
</body>
</html>
