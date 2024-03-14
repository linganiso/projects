<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eHotel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Onclick -->
  <link rel="stylesheet" href="../js/main.js">
  <!-- Form -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<div class="wrapper">
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="dashboard.php" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
      <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
      </a>
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </li>

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- NotifiVcations Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Tech Solutions</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="grades.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Grades
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="assessments.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Assessments
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Messages.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Messages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="notification.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Notifications
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacts.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Contacts
              </p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logout
              </p>
            </a>
          </li>   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="card card-solid" style="margin: 1%;">
    <div class="card-header">
      <button type="button" name="button" class="btn btn-primary" style="background: #343a40; border: none; float:right;">Customise Page</button>
    </div>
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">

<!-- Default box -->
<div class="card card-solid" style="display: flex;">
  <div class="card-header">
      <h3 class="card-title">Recently accessed subjects</h3>
    </div>
  <div class="card-body pb-0">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-lightd-flexflex-fill">
          <img src="../upload/Maths.jpg" style="height: 20vh;" alt="">
          <div class="card-bodypt-0">
          </div>
          <div class="cardfooter">
            <div style="padding: 1% 5%;">
            <a href="subject.php">
               <p style="color: #343a40;">2023 <br><b>Mathematics</b></p>
            </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-lightd-flexflex-fill">
          <img src="../upload/NaturalScience.jpg" style="height: 20vh;" alt="">
          <div class="card-bodypt-0">
          </div>
          <div class="cardfooter">
            <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>Natural Sciences (NS)</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
        <div class="card bg-lightd-flexflex-fill">
          <img src="../upload/EMS.jpg" style="height: 20vh;" alt="">
          <div class="card-bodypt-0">
          </div>
          <div class="cardfooter">
            <div style="padding: 1% 5%;">
            <p style="color: #343a40;">2023 <br><b>Economic Management Scie (EMS)</b></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card card-solid">
  <div class="card-header">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #343a40; border: none; float:right;">
        Summary
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#" onclick="card()">Card</a>
        <a class="dropdown-item" href="#" onclick="list()">List</a>
        <a class="dropdown-item" href="#">Summary</a>
      </div>
    </div>
    <h3 class="card-title">Subject overview</h3>
    </div>
  <div class="card-body pb-0">
    <span id="cardd">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/English.webp" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>English (FAL)</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/xhosa.jpeg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
                <p style="color: #343a40;">2023 <br><b>IsiXhosa (HL)</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/EMS.jpg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>Economic Management Scie (EMS)</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/Technology.jpg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>Technology</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/Life Orientation.jpeg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
                <p style="color: #343a40;">2023 <br><b>Life Orientation</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/NaturalScience.jpg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>Natural Science (NS)</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/Arts and Culture.jpg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>Arts and Culture</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/Maths.jpg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
                <p style="color: #343a40;">2023 <br><b>Mathematics</b></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
          <div class="card bg-lightd-flexflex-fill">
            <img src="../upload/Social Science.jpg" style="height: 20vh;" alt="">
            <div class="card-bodypt-0">
            </div>
            <div class="cardfooter">
              <div style="padding: 1% 5%;">
              <p style="color: #343a40;">2023 <br><b>Social Science (SS)</b></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </span>
    <div id="list" class="row" style="display: none;">
      <table id="example1" class="table table-striped">
        <tbody>
          <tr>
            <td style="border: none;">English (FAL)</td>
          </tr>
          <tr> 
            <td>Economic Management Science (EMS)</td>
          </tr>
          <tr> 
            <td>IsiXhosa (HL)</td>
          </tr>  
          <tr>
            <td>Technology</td>
          </tr>
          <tr> 
            <td>Natural Sciences (NS)</td>
          </tr>
          <tr> 
            <td>Social Sciences (SS)</td>
          </tr>
          <tr> 
            <td>Arts and Culture</td>
          </tr>
          <tr>  
            <td>Life Orientation</td>
          </tr>
          <tr>  
            <td>Mathematics</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div class="card card-solid">
  <div class="card-header">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: #343a40; border: none; float:right;">
        Sort
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#" onclick="date()">Sort by date</a>
        <a class="dropdown-item" href="#" onclick="subject()">Sort by subject</a>
      </div>
    </div>
    <h3 class="card-title">Timeline</h3>
    </div>
      <span id="subject" style="display: none;">
        <div class="fdirect-chat-contacts">
          <ul class="contacts-list">
            <!-- End Contact Item -->
                    <li>
                      <a href="#">
    
                        <div class="fcontacts-list-info">
                          <span class="contacts-list-name" style="color: #343a40;">
                            Economic Management Sc (Test 1)
                          </span>
                          <span class="ontacts-list-msg">15/03/2024</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                                <!-- End Contact Item -->
                                <li>
                      <a href="#">
    
                        <div class="fcontacts-list-info">
                          <span class="contacts-list-name" style="color: #343a40;">
                            Mathematics (Class Test)
                          </span>
                          <span class="ontacts-list-msg">28/02/2015</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
              </ul>
            </div>
      </span>
      <span id="date">        
      <div class="fdirect-chat-contacts">
      <ul class="contacts-list">
        <!-- End Contact Item -->
                <li>
                  <a href="#">

                    <div class="fcontacts-list-info">
                      <span class="contacts-list-name" style="color: #343a40;">
                        Economic Management Sc (Test 1)
                      </span>
                      <span class="ontacts-list-msg">15/03/2024</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
                            <!-- End Contact Item -->
                            <li>
                  <a href="#">

                    <div class="fcontacts-list-info">
                      <span class="contacts-list-name" style="color: #343a40;">
                        Mathematics (Class Test)
                      </span>
                      <span class="ontacts-list-msg">28/02/2015</span>
                    </div>
                    <!-- /.contacts-list-info -->
                  </a>
                </li>
                <!-- End Contact Item -->
          </ul>
        </div>
      </span>
      </div>
<div class="card card-solid">
  <div class="card-header">
      <a href="../user/Messages.php">
        <button type="button" name="button" class="btn btn-primary" style="background: #343a40; border: none; float:right;">Users</button>
      </a>
      <h3 class="card-title">Online users</h3>
    </div>
    <div class="fdirect-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="../user/chatbot.php">
                        <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name" style="color: #343a40;">
                            Count Dracula
                              <button type="button" class="btn contacts-list-date float-right">
                               <i class="fas fa-comments"></i>
                              </button>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="../dist/img/user7-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name" style="color: #343a40;">
                            Sarah Doe
                            <button type="button" class="btn contacts-list-date float-right">
                               <i class="fas fa-comments"></i>
                              </button>                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="../dist/img/user3-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name" style="color: #343a40;">
                            Nadia Jolie
                            <button type="button" class="btn contacts-list-date float-right">
                               <i class="fas fa-comments"></i>
                              </button>                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="../dist/img/user5-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name" style="color: #343a40;">
                            Nora S. Vans
                            <button type="button" class="btn contacts-list-date float-right">
                               <i class="fas fa-comments"></i>
                              </button>                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                  </ul>
                  <!-- /.contacts-list -->
  </div>
</div>
<!-- /.card -->

</section>
  <!-- /.content -->
  <script>
      function card(){
        document.getElementById("cardd").style.display = "block";
        document.getElementById("list").style.display = "none";
      }
      function list(){
        document.getElementById("cardd").style.display = "none";
        document.getElementById("list").style.display = "block";
      }
      function date(){
        document.getElementById("subject").style.display = "block";
        document.getElementById("date").style.display = "none";
      }
      function subject(){
        document.getElementById("subject").style.display = "none";
        document.getElementById("date").style.display = "block";
      }
  </script>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2023 <a href="https://adminlte.io">municonnect.co.za</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>

<script>
$(function () {
  $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["", "", "", "", "", ""]
  })

});
</script>
</body>
</html>