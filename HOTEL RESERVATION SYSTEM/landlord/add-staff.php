




<?php include '../partials/header/header.php' ?>
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
<?php include '../partials/aside/admin.php' ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Add Staff</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Add Staff</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <?php
                    if(isset($_SESSION['message']))
                    {
                      ?>
                        <div class="card-header bg-success">
                          <?php
                            echo '<h3 class="card-title">'.$_SESSION['message'].'</h3>';
                            unset($_SESSION['message']);
                            ?>
                            <script>
                              setTimeout(function () {
                                window.location.href = "add-member.php";
                              }, 2000);
                            </script>
                        <div>
                      <?php
                    }else {
                      ?>
                      <div class="card-header bg-warning" style="display: none">
                        <h3 class="card-title">Insert ID Number To Retrieve Proof of Residence</h3>
                        <div>
                      <?php
                    }
                ?>
                </div>
                  </div>
              <!-- /.card-header -->
              <!-- form start -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="../../include/member-code.php">
                <div class="card-body">
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name"/>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name"/>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"/>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="number" name="phoneNo" id="phoneNo" class="form-control" placeholder="Phone Number"/>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="number" name="idNo" id="idNo" class="form-control" placeholder="ID Number"/>
                  </div>
                  <div class="form-group">
                    <!-- <label for="exampleInputPassword1">Password</label> -->
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                  </div>
				  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="save_student_btn" class="btn btn-primary form-control">SUBMIT</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->

  <script>
    function toggleCellNumberField() {
        var cellNoField = document.getElementById("cellNo");
        var noCellOption = document.getElementById("noCellOption");

        if (noCellOption.checked) {
            cellNoField.style.display = "none";
            cellNoField.value = "N/A";
        } else {
            cellNoField.style.display = "block";
            cellNoField.value = ""; // Clear the field
        }
    }

    function validateForm() {
        var cellNoField = document.getElementById("cellNo");
        var cellNoValue = cellNoField.value.trim();

        if (!document.getElementById("noCellOption").checked && (cellNoValue === "" || cellNoValue === "N/A")) {
            alert("Please provide a valid cell number.");
            return false;
        }

        return true;
    }
</script>
  <!-- /.content -->
  <?php include '../partials/footer/footer.php' ?>
