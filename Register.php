<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include 'db.php';
    

        $name = @$_POST["name"];
        $email = @$_POST["email"];
        $password = @$_POST["password"];
        $role = @$_POST["role"];
        $q = "INSERT INTO `user`  VALUES (null, '$name', '$email', '$password', $role);";
        $res = mysqli_query($con, $q);
        if ($res) {
           header('location: login.php');
            
        }else{
            echo mysqli_connect_error($con);
            
        }

    }; 


?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>E-vaccination</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
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
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            
                              <div class="card-body">
                              <h3 class="mx-2 ">User Register</h3>
                                <form method="POST">
                                    <div class="form-group mt-3 ">
                                        <input type="text" class="form-control my-4" name="Name" id="subject"
                                            placeholder="Name" pattern="[A-Za-z ]{3,50}" required>
                                        <input type="email" class="form-control my-4" name="password" id="subject"
                                            placeholder="Email" required>

                                        <input type="password" class="form-control my-4" name="password" id="subject"
                                            placeholder="Password" required>

                                        <input type="text" class="form-control my-4" name="password" id="subject"
                                            placeholder="Role"  pattern="[2-4 ]{1,2}"  required>
                                            <div class="my-3"><button type="submit" class=" btn btn-primary ">Rigester</button></div>


                                    </div>
                                    <div class="mb-4 text-muted text-center">
                                        Already Registered? <a href="login.php">Login</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <script src="assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/auth-register.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->

</html>