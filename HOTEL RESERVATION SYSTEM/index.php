<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMLbookings</title>
  <link rel="shortcut icon" href="upload/icon.png" type="image/ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
        background: url(upload/hotel.jpeg);
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
              <a class="nav-link me-2">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="#">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link">Contact Us</a>
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
 
      <!-- Main content -->
        <section class="content">
          <div class="dcontent-wrapper bg-light">
            <div class="main-background">
              <div class="main-text" style="padding: 1%;">
                <h2 style="font-size: 50px; font-weight: bold; float:left;">Spend Your Holiday</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="user/hotels.php">
                <button type="submit" class="btn btn-primary" style="background: #e40046; border: none;
                  color: #fff;border-radius: 3%;font-size: 20px;
                  box-shadow: 10px 10px 10px rgba(0, 0, 0, .1),
                  -10px -10px 10px rgba(255, 255, 255, .1),
                  inset 10px 10px 10px rgba(0, 0, 0, .1),
                  inset -10px -10px 10px rgba(255, 255, 255, .1);
                  ">Booking an Appointment</button>
                </a>
              </div>     
            </div>
                  <!-- check availabilty form -->
                  <div class="container availabilty-form">
                    <div class="row">
                      <div class="col-lg-12 bg-white box-shadow p-4 rounded">
                        <h5 class="mb-4">Check Booking availabilty</h5>
                        <form action="user/hotels.php">
                          <div class="row align-items-end">
                            <div class="col-lg-3 mb-3">
                              <label class="form-label" style="font-weight: 500;">Check-in</label>
                              <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 mb-3">
                              <label class="form-label" style="font-weight: 500;">Check-out</label>
                              <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-2 mb-3">
                              <label class="form-label" style="font-weight: 500;">Adults</label>
                              <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-2 mb-3">
                              <label class="form-label" style="font-weight: 500;">Children</label>
                              <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-1 mb-lg-3 mt-2">
                              <button type="submit" class="btn text-white shadow-none" style="background: #343a40; border: none;">Submit</button>                          
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
    
                  <!-- Our Rooms -->
                  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Hotels</h2>
                  <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/hotel.jpeg" style="height: 35vh;" alt="Dist Photo 1">
                              <a href="user/dashboard.php">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                  <h5 style="font-size: x-large;" class="card-title text-primary text-white"><b>White House Lodge</b></h5>
                                  <p style="font-size: large;" class="card-text text-white pb-2 pt-1">Butterworth (Bika)
                                      <span class="rating mb-1" style="float: right;">
                                          <span class="badge rounded-pill">
                                            <i class="nav-icon fas fa-star"></i>
                                            <i class="nav-icon fas fa-star"></i>
                                            <i class="nav-icon fas fa-star"></i>
                                            <i class="nav-icon fas fa-star"></i>
                                           </span>
                                        </span>                 
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/room-1.jpeg" style="height: 35vh;" alt="Dist Photo 1"> 
                              <a href="user/dashboard.php">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                  <h5 style="font-size: x-large;" class="card-title text-primary text-white"><b>White House Lodge</b></h5>
                                  <p style="font-size: large;" class="card-text text-white pb-0 pt-1">Mthatha (Northcrest)   
                                      <span class="rating mb-1" style="float: right;">
                                          <span class="badge rounded-pill">
                                            <i class="nav-icon fas fa-star"></i>
                                            <i class="nav-icon fas fa-star"></i>
                                            <i class="nav-icon fas fa-star"></i>
                                           </span>
                                        </span>       
                                </div>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/room-2.jpg" style="height: 35vh;" alt="Dist Photo 1">
                              <a href="user/dashboard.php">
                                <div class="card-img-overlay d-flex flex-column justify-content-end">
                                  <h5 style="font-size: x-large;" class="card-title text-primary text-white"><b>White House Lodge</b></h5>
                                  <p style="font-size: large;" class="card-text text-white pb-2 pt-1">East Landon (Southenwood)
                                      <span class="rating mb-1" style="float: right;">
                                          <span class="badge rounded-pill">
                                            <i class="nav-icon fas fa-star"></i>
                                            <i class="nav-icon fas fa-star"></i>
                                           </span>
                                        </span>            
                                </div>
                              </a>
                            </div>
                          </div>
                      <div class="col-lg-12 text-center mt-5">
                        <a href="user/hotels.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Hotels</a>
                      </div>
                    </div>
                  </div>
    
                  <!-- Our Gallery -->
                  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Gallery</h2>
                  <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/hotel.jpeg" style="height: 35vh;" alt="Dist Photo 1">
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/room-1.jpeg" style="height: 35vh;" alt="Dist Photo 1">
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/room-2.jpg" style="height: 35vh;" alt="Dist Photo 1">
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/hotel.jpeg" style="height: 35vh;" alt="Dist Photo 1">
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/room-1.jpeg" style="height: 35vh;" alt="Dist Photo 1">
                            </div>
                          </div>
                          <div class="col-md-12 col-lg-6 col-xl-4">
                            <div class="card mb-2 bg-gradient-dark">
                              <img class="card-img-top" src="upload/room-2.jpg" style="height: 35vh;" alt="Dist Photo 1">
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
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

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