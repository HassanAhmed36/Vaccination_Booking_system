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
                        <a href="index.php"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span class="logo-name">Otika</span>
                        </a>
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
            $q = "SELECT * from `vaccine`;";
            $res = mysqli_query($con, $q);
            if (!$res) {
                echo "something gone wrong";
                # code...
            } else {
            }
            ?>


            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <section class="section">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>vaccine List</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>vaccine Name</th>
                                                            <th>Vaccine status</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                                                            <tr>
                                                                <td cl  ass="col-md-3"><?= $row['v_name'] ?> </td>
                                                                <td class="col-md-3"><?= $row['v_status'] ?></td>
                                                                <td>
                                                                    <a class="btn btn-sm btn-warning mr-1" href="/vaccine/editvaccine.php?id=<?= $row['v_id'] ?>"> Edit</a>
                                                                    <a class="btn btn-sm btn-danger" href="/vaccine/deletevaccine.php?id=<?= $row['v_id'] ?>"> Delete</a>
                                                                </td>   

                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
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