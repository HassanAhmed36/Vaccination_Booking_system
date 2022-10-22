<!DOCTYPE html>
<html lang="en">


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-vaccination</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
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
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          
          
         
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">Otika</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown">
              <a href="index.php" class="nav-link"><i data-feather="monitor"></i><span>View website</span></a>
            </li>
            <?php

            ?>
            <?php
            if (@$_SESSION['role'] == 1 or @$_SESSION['role'] == 3 and !@$_SESSION['h_name'] ){ 
              # code...
             echo' <li class="dropdown">
                <a href="childlist.php" class="nav-link"><i data-feather="monitor"></i><span>child list</span></a>
              </li>';
            }

            ?>
            <?php
            if (!@$_SESSION['role'] == 3 or @$_SESSION['role'] == 1) {
              ?>
             
             <li class="dropdown">
             <a href="#" class="menu-toggle nav-link has-dropdown"><i
                 data-feather="briefcase"></i><span>hospitals</span></a>
             <ul class="dropdown-menu">
               <li><a class="nav-link" href="addhospital.php">Rigester hospital</a></li>
               <li><a class="nav-link" href="listhospital.php">hospital list</a></li>
             </ul>
           </li>
          
           <li class="dropdown">
             <a href="#" class="menu-toggle nav-link has-dropdown"><i
                 data-feather="briefcase"></i><span>Vaccine</span></a>
             <ul class="dropdown-menu">
               <li><a class="nav-link" href="addvaccine.php">Add vaccine</a></li>
               <li><a class="nav-link" href="listvaccine.php">Vaccinelist</a></li>
             </ul>
           </li>
           <?php
            }

            ?>

           
            <li><a class="nav-link" href="appoiment.php">Appointment</a></li>

            
           
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->

      <?php
      
      include 'db.php';

        $id = $_GET['id'];

        $q = "SELECT * FROM `hospital` where `h_id` = $id";
        $res = mysqli_query($con, $q);
        $row = mysqli_fetch_assoc($res);

              if($_SERVER["REQUEST_METHOD"] == "POST") {

            $id = $_GET['id'];
            $name = @$_POST['h_name'];
            $address = @$_POST['h_address'];
            $password = @$_POST['h_password'];
            $qu = "UPDATE `hospital` set `h_id`=$id, `h_name`= '$name', `h_address` = '$address', `h_password` = '$password'  WHERE `hospital`.`h_id` = $id";
            $result = mysqli_query($con, $qu);
            if ($result) {

              
              header("location: listhospital.php");
              die;
            }
  
}


      ?>


      <div class="main-content">
        <section class="section">
          <div class="section-body">
          <section class="section">
      <div class="container ">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header my-1">
                <h3>Edit details</h3>
              </div>
              <div class="card-body">
                <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Hospital Name</label>
                    <input id="email" type="text" class="form-control" name="h_name" value="<?= $row['h_name'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Hospital Address</label>
                    <input id="" type="text" class="form-control" name="h_address" value="<?= $row['h_address'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Password</label>
                    <input id="email" type="password" class="form-control" name="h_password" value="<?= $row['h_password'] ?>">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">
                      Update
                    </button>
                  </div>
                </form>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
          </div>
        </section>
       
      </div>
      
    </div>
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


<!-- blank.html  21 Nov 2019 03:54:41 GMT -->
</html>