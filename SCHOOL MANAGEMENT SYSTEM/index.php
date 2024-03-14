<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="upload/solethu.png" type="image/ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <title>Maki Management System</title>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card card-primary card-outline card-outline-tabs">
      <div class="crd-body">
        <div class="tab-content" id="custom-tabs-four-tabContent">
          <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
            <div class="login-logo" style="background: #343a40; color:aliceblue; padding: 3%;">
              <b>Tech Solutions</b> 
            </div>
            <div class="card-body login-card-body">   
              <p style="font-size: large;" class="login-box-msg">Sign in to start your session</p>
              <form action="user/dashboard.php"  id="quickForm" method="post">
                <div class="input-group mb-3 form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="E-mail/ Username">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3 form-group">
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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
        
                  <div class="col-4">
                    <button type="button" name="submit" class="btn btn-primary btn-block" style="background: #343a40; border: none;" onclick="validate()">Sign In</button>
                  </div>
         
                </div>
              </form>
      
              <!-- /.social-auth-links -->
        
              <p class="mb-1">
                <a href="security/forgot.php">I forgot my password</a>
              </p>
              <p class="mb-0">
                <a href="security/register.php" class="text-center">Register a new account</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
<!-- /.login-box -->
<script>
  function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if ( username == "" || password == ""){
      alert ("Please fill out the required fields");
      document.location.href="index.php";
      return false;
      }
    else if ( username == "User" && password == "123"){
      alert ("Login successfully");
      document.location.href="user/dashboard.php";
      return false;
      }  
    else if( username == "Admin" && password == "123"){
      alert ("Login successfully");
      document.location.href="admin/dashboard.php";
      return false;
      } 
    else if( username == "Teacher" && password == "123"){
      alert ("Login successfully");
      document.location.href="teachers/dashboard.php";
      return false;
      }
    else{
      alert ("Invalid login, please try again");
      document.location.href="index.php";
      return true;
      }   
  }
</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
</body>
</html>
