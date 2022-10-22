<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  include 'db.php';


  
  $name = @$_POST["name"];
  $password = @$_POST["password"];
  
  $q = "SELECT * FROM `user` Where name ='$name' AND password='$password';";
  $res = mysqli_query($con, $q);
  $num = mysqli_num_rows($res);
    
  
  if ($num) {
    
    session_start();
    
    $_SESSION['loggedin'] = true;
    $_SESSION['name'] = $name;
    $q = "SELECT * FROM `user` where name = '$name'";
    $result = mysqli_query($con, $q);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['role'] = $row['role'];
    
    if (@$_SESSION['role'] == 1) {
       header("location: dashboard.php");
    }else{
        header("location: index.php");
    }

  

    



    
  } 
};


?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-vaccination</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Login</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="#" class="needs-validation" novalidate="">
                                    <div class="form-group mt-3 ">
                                        <input type="text" class="form-control my-4" name="name" id="subject"
                                            placeholder="Email" required>
                                        <input type="password" class="form-control my-4" name="password" id="subject"
                                        placeholder="Password" required>
                                    </div>

                                   






                                    <div class="my-3"><button type="submit" class=" btn btn-primary ">Login</button></div>

                            </div>


                        </div>
                    </div>
                </div>
                <div class="mt-2 text-muted text-center">
                    Don't have an account? <a href="Register.php">Create One</a>
                </div>
                <div class="mt-2 text-muted text-center">
                    Are you a hospital? <a href="hospitallogin.php">hospital login</a>
                </div>
            </div>
    </div>
    </div>
    </section>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->

</html>