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
    <!-- Notifications Dropdown Menu -->
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
  <a href="admin.php" class="brand-link">
    <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">eHotel</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Rooms Manage
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="../admin/add-landlord.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Landlord</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../admin/add-staff.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Edit Info</p>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Guest Manage
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
  
      <li>
      <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-search"></i>
                <p>
                  Price Manage
                  <i class="fas fa-angle-left right"></i>
                  <span class="badge badge-info right"></span>
                </p>
              </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="membership.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Client</p>
              </a>
            </li>
            </ul>  
          </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Table
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="overall-record.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Client Record</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="table/stuff.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Client Record</p>
              </a>
            </li>
          </ul>
        </li>
      </li> 
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Reser Manage
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Front Office
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Point Of Sales
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>   
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Night Auditor
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li> 
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              House Keeping
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Security
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right"></span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Event</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Upcoming Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Past Events</p>
              </a>
            </li>
          </ul>  
      </li>   
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Security
            </p>
          </a> 
      </li>
      <li class="nav-item">
          <a href="../include/logout.php" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
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
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
 
      <!-- /.row -->
      <!-- Main row -->
  <div class="card">
        <div class="card-header">
          <a href="add-rooms.php">
            <button type="button" name="button" class="btn btn-primary" style="background: #343a40; border: none; float:right;"> Add</button>
          </a>
          <h3 class="card-title">Rooms</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Room Name</th>
              <th>Room No</th>
              <th>Price</th>
              <th>Features</th>
              <th>Guests</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>Simple Room</td>
                <td>Room 365</td>
                <td>R600 per night</td>
                <td>2 Rooms, 1 Bathroom, 1 Balcony & 3 Sofa</td>
                <td>5 Adults & 3 Children</td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="student-view.php?id=<?= $student['user_id']; ?>">
                    <i class="fas fa-folder"></i>
                  </a>
                  <a class="btn btn-info btn-sm" href="student-edits.php?id=<?= $student['user_id']; ?>">
                    <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="register.inc.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_student" value="<?=$student['user_id'];?>" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr> 
              <tr>
                <td>Simple Room</td>
                <td>Room 365</td>
                <td>R600 per night</td>
                <td>2 Rooms, 1 Bathroom, 1 Balcony & 3 Sofa</td>
                <td>5 Adults & 3 Children</td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="student-view.php?id=<?= $student['user_id']; ?>">
                    <i class="fas fa-folder"></i>
                  </a>
                  <a class="btn btn-info btn-sm" href="student-edits.php?id=<?= $student['user_id']; ?>">
                    <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="register.inc.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_student" value="<?=$student['user_id'];?>" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr> 
              <tr>
                <td>Simple Room</td>
                <td>Room 365</td>
                <td>R600 per night</td>
                <td>2 Rooms, 1 Bathroom, 1 Balcony & 3 Sofa</td>
                <td>5 Adults & 3 Children</td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="student-view.php?id=<?= $student['user_id']; ?>">
                    <i class="fas fa-folder"></i>
                  </a>
                  <a class="btn btn-info btn-sm" href="student-edits.php?id=<?= $student['user_id']; ?>">
                    <i class="fas fa-pencil-alt"></i>
                  </a>
                  <form action="register.inc.php" method="POST" class="d-inline">
                    <button type="submit" name="delete_student" value="<?=$student['user_id'];?>" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr> 
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
</div>
<div class="card">
  <div class="card-header">
    <a href="add-facilities.php">
      <button type="button" name="button" class="btn btn-primary" style="background: #343a40; border: none; float:right;"> Add</button>
    </a>
    <h3 class="card-title">Facilities</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>Facility Name</th>
        <th>Facility Description</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td>Wifi</td>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem atque maiores quia architecto nihil dolorem minus inventore ab consequatur earum voluptas assumenda culpa possimus veritatis harum dolor beatae, adipisci voluptatem.</td>
          <td><img src="../upload/wifi.png" alt=""></td>
          <td class="project-actions text-right">
            <a class="btn btn-info btn-sm" href="student-edits.php?id=<?= $student['user_id']; ?>">
              <i class="fas fa-pencil-alt"></i>
            </a>
            <form action="register.inc.php" method="POST" class="d-inline">
              <button type="submit" name="delete_student" value="<?=$student['user_id'];?>" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        <tr>
          <td>TV</td>
          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem atque maiores quia architecto nihil dolorem minus inventore ab consequatur earum voluptas assumenda culpa possimus veritatis harum dolor beatae, adipisci voluptatem.</td>
          <td><img src="../upload/tv.png" alt=""></td>
          <td class="project-actions text-right">
            <a class="btn btn-info btn-sm" href="student-edits.php?id=<?= $student['user_id']; ?>">
              <i class="fas fa-pencil-alt"></i>
            </a>
            <form action="register.inc.php" method="POST" class="d-inline">
              <button type="submit" name="delete_student" value="<?=$student['user_id'];?>" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i>
              </button>
            </form>
          </td>
        </tr>  
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
    </div><!-- /.container-fluid -->
  </section>
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
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
</script>
</body>
</html>  
