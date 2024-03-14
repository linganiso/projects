<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMLbookings | Rooms</title>
  <link rel="shortcut icon" href="../upload/icon.png" type="image/ico" />
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
  <style>
    :root{
    --color: #e40046;
    }
    .step{
        display: none;
    }    
    .step.active{
        display: block; 
    }
    .main-background{
        background: url(../upload/hotel.jpeg);
        background-size: cover;
        background-repeat: no-repeat;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;  
    }
    .book-section{
        padding: 2rem 0%;
        height: 0vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .inner-book{
        width: 100%;
        background: black;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 1.5rem;
    }
    .inner-book input{
        padding: .7rem 1rem;
        margin: .5rem 0;
    }
    .book-btn{
        padding: .7rem 1rem;
        background: #e40046;

    }
    .book-btn a{
        color: white;
        font-size: 1.5rem;
    }
    .our-rooms{
        padding: 2rem 7%;
    }
    .our-rooms h1{
        color: black;
        text-align: center;
        font-size: 40px;
        padding-bottom: 2rem;
    }
    .our-rooms h1 span{
        color: var(--maincolor);
    }
    .availabilty-form{
      margin-top: -10vh; 
      z-index: 2; 
      position: relative;
    }
    @media screen and (max-width: 575px) {
      .availabilty-form{
      margin-top: -10vh; 
      padding: 0 35px;
      }  
    }
    .fa-star{
      color: gold;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">SML BOOKINGS</a>
        <button class="navbar-toggler shadow-none" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="#">Rooms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2">About</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <form class="d-flex">
              <!-- <button style="flo" class="btn btn-outline-dark shadow-none me-lg-2 me-3 mr-2">
                Login
              </button>
              <button class="btn btn-outline-dark shadow-none">
                Register
              </button> -->
            </form>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->
    
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><b>SML BOOKING</b></span>
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
                    Home
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    About
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Rooms
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Facilities
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Testimonials
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Contact Us
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Sign-in
                  </p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Sign-up
                  </p>
                </a>
              </li>   
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    
      <!-- Main content -->
        <section class="content">
          <div class="content-wrapper">
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1></h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Our Rooms</li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>
    
                  <!-- Our Rooms -->
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                          <img src="../upload/room-1.jpeg" class="card-img-top" style="height: 27vh;" alt="...">
                          <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">R600 per night</h6>
    
                            <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                               </span>
                            </div>
                            <div class="facilities mb-4">
                              <h6 class="mb-1">Facilities</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                               </span>
                            </div>
                            <div class="guests mb-4">
                              <h6 class="mb-1">Guests</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Children
                               </span>
                            </div>
                            <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="booking.php" class="btn btn-sm text-white shadow-none" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                              <a href="details.php" class="btn btn-sm btn-outline-dark shadow-none" >More Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                          <img src="../upload/room-2.jpg" class="card-img-top" style="height: 27vh;" alt="...">
                          <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">R600 per night</h6>
    
                            <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                               </span>
                            </div>
                            <div class="facilities mb-4">
                              <h6 class="mb-1">Facilities</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                               </span>
                            </div>
                            <div class="guests mb-4">
                              <h6 class="mb-1">Guests</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Children
                               </span>
                            </div>
                            <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="booking.php" class="btn btn-sm text-white shadow-none" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                              <a href="details.php" class="btn btn-sm btn-outline-dark shadow-none" >More Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                          <img src="../upload/hotel.jpeg" class="card-img-top" style="height: 27vh;" alt="...">
                          <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">R600 per night</h6>
    
                            <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                               </span>
                            </div>
                            <div class="facilities mb-4">
                              <h6 class="mb-1">Facilities</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                               </span>
                            </div>
                            <div class="guests mb-4">
                              <h6 class="mb-1">Guests</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Children
                               </span>
                            </div>
                            <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="booking.php" class="btn btn-sm text-white shadow-none" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                              <a href="details.php" class="btn btn-sm btn-outline-dark shadow-none" >More Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                          <img src="../upload/room-1.jpeg" class="card-img-top" style="height: 27vh;" alt="...">
                          <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">R600 per night</h6>
    
                            <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                               </span>
                            </div>
                            <div class="facilities mb-4">
                              <h6 class="mb-1">Facilities</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                               </span>
                            </div>
                            <div class="guests mb-4">
                              <h6 class="mb-1">Guests</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Children
                               </span>
                            </div>
                            <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="booking.php" class="btn btn-sm text-white shadow-none" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                              <a href="details.php" class="btn btn-sm btn-outline-dark shadow-none" >More Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                          <img src="../upload/room-2.jpg" class="card-img-top" style="height: 27vh;" alt="...">
                          <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">R600 per night</h6>
    
                            <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                               </span>
                            </div>
                            <div class="facilities mb-4">
                              <h6 class="mb-1">Facilities</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                               </span>
                            </div>
                            <div class="guests mb-4">
                              <h6 class="mb-1">Guests</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Children
                               </span>
                            </div>
                            <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="booking.php" class="btn btn-sm text-white shadow-none" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                              <a href="details.php" class="btn btn-sm btn-outline-dark shadow-none" >More Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                          <img src="../upload/hotel.jpeg" class="card-img-top" style="height: 27vh;" alt="...">
                          <div class="card-body">
                            <h5>Simple Room Name</h5>
                            <h6 class="mb-4">R600 per night</h6>
    
                            <div class="features mb-4">
                               <h6 class="mb-1">Features</h6>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Rooms
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Bathroom
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balcony
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Sofa
                               </span>
                            </div>
                            <div class="facilities mb-4">
                              <h6 class="mb-1">Facilities</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wifi
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Television
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                AC
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Room heater
                               </span>
                            </div>
                            <div class="guests mb-4">
                              <h6 class="mb-1">Guests</h6>
                              <span class="badge rounded-pill bg-light text-dark text-wrap">
                                5 Adults
                               </span>
                               <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Children
                               </span>
                            </div>
                            <div class="rating mb-4">
                              <h6 class="mb-1">Rating</h6>
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                              <a href="booking.php" class="btn btn-sm text-white shadow-none" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                              <a href="details.php" class="btn btn-sm btn-outline-dark shadow-none" >More Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    
                  <div class="container-fluid bg-white mt-5">
                    <div class="row">
                      <div class="col-lg-4 p-4">
                        <h3 class="h-font fw-bold fs-3 mb-2">SML BOOKING</h3>
                        <p>
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                          Voluptatum harum excepturi eius non autem! Odit,
                          facilis iure in eos aperiam, blanditiis voluptatem dignissimos
                          illum sed laudantium sunt eveniet, deserunt quasi.
                        </p>
                      </div>
                      <div class="col-lg-4 p-4">
                        <h5 class="mb-3">Links</h5>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
                        <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
                      </div>
                      <div class="col-lg-4 p-4">
                          <h5 class="mb-3">Follow Us</h5>
                          <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                            <i class="bi-bi-twitter me-1"></i>twitter
                          </a><br>
                          <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
                            <i class="bi-bi-twitter me-1"></i>facebook
                          </a><br>
                          <a href="#" class="d-inline-block text-dark text-decoration-none">
                            <i class="bi bi-instagram me-1"></i>instagram
                          </a>
                      </div>
                    </div>
                  </div>        
          </div>
    
        <h6 class="text-center bg-dark text-white p-3 m-0">Designied and Developed by LINGANISO SOLETHU</h6>
        </section>
    </div>



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
    <script>
      var swiper = new Swiper(".swiper-container",{
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 3500,
          disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials",{
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidePerView: "auto",
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,
        },
        pagination: {
          el: ".swiper-pagination",
        }
      });
    </script>
</body>
</html>