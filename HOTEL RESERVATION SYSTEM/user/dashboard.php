<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMLbookings | Homepage</title>
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
      font-family: 'Merienda', cursive;
      font-family: 'Poppins', sans-serif;
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
    
      <!-- Main content -->
        <section class="content">
          <div class="dcontent-wrapper bg-light">
            <div class="main-background">
              <div class="main-text" style="padding: 1%;">
                <h2 style="font-size: 50px; font-weight: bold; float:left;">Spend Your Holiday</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <a href="rooms.php">
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
                        <form action="rooms.php">
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
                  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
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
                      <div class="col-lg-12 text-center mt-5">
                        <a href="rooms.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
                      </div>
                    </div>
                  </div>
    
                  <!-- Our Facilities -->
                  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Facilities</h2>
                  <div class="container">
                    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" style="margin: 1.5%;">
                        <img src="../upload/wifi.png" width="80px">
                        <h5 class="mt-3">Wifi</h5>
                      </div>
                      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" style="margin: 1.5%;">
                        <img src="../upload/tv.png" width="80px">
                        <h5 class="mt-3">Television</h5>
                      </div>
                      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" style="margin: 1.5%;">
                        <img src="../upload/ac.png" width="80px">
                        <h5 class="mt-3">AC</h5>
                      </div>
                      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" style="margin: 1.5%;">
                        <img src="../upload/heater.png" width="80px">
                        <h5 class="mt-3">Heater</h5>
                      </div>
                      <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" style="margin: 1.5%;">
                        <img src="../upload/fridge.png" width="80px">
                        <h5 class="mt-3">Fridge</h5>
                      </div>
                      <div class="col-lg-12 text-center mt-5">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
                      </div>
                    </div>
                  </div>
                  <!-- Our Testimonials -->
                  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Testimonials</h2>
                  <div class="container">
                    <div class="swiper swiper-testimonials">
                      <div class="swiper-wrapper row">
    
                        <div class="col-lg-4 p-4">
                          <div class="swiper-slide bg-white p-4">
                            <div class="profile d-flex align-items-center pb-4">
                              <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                              <h5 class="m-0 ms-2 px-2">Linganiso Solethu</h5>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus totam amet suscipit ut quae. Temporibus pariatur voluptatibus reiciendis, blanditiis molestias dolores magnam dolor aspernatur nihil accusantium ad qui ea sed!
                            </p>
                            <div class="rating">
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 p-4">
                          <div class="swiper-slide bg-white p-4">
                            <div class="profile d-flex align-items-center pb-4">
                              <img class="contacts-list-img" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                              <h5 class="m-0 ms-2 px-2">Siphosethu Langa</h5>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus totam amet suscipit ut quae. Temporibus pariatur voluptatibus reiciendis, blanditiis molestias dolores magnam dolor aspernatur nihil accusantium ad qui ea sed!
                            </p>
                            <div class="rating">
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-4 p-4">
                          <div class="swiper-slide bg-white p-4">
                            <div class="profile d-flex align-items-center pb-4">
                              <img class="contacts-list-img" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
                              <h5 class="m-0 ms-2 px-2">Lwando Nkosi</h5>
                            </div>
                            <p>
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus totam amet suscipit ut quae. Temporibus pariatur voluptatibus reiciendis, blanditiis molestias dolores magnam dolor aspernatur nihil accusantium ad qui ea sed!
                            </p>
                            <div class="rating">
                              <span class="badge rounded-pill bg-light">
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                                <i class="nav-icon fas fa-star"></i>
                               </span>
                            </div>
                          </div>
                        </div>
                     
                      </div>
                      <div class="swiper-pagination"></div>
                    </div>
                  </div>
    
                  <!-- Reach Us -->
                  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Reach Us</h2>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                        <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3399.5490087578287!2d28.782255873550266!3d-31.563989417160325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e5fd156bc245903%3A0x3fa68d3f30dd1a31!2sWhite%20House%20Lodge!5e0!3m2!1sen!2sza!4v1701958326487!5m2!1sen!2sza" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="bg-white p-4 rounded mb-4">
                          <h5>Calls</h5>
                          <a href="tel: 0635700638" class="d-inline-block mb-2 text-decoration-none text-dark">
                            <i class="bi bi-telephoe-fill"></i> +27 63 570 0638
                          </a>
                          <br>
                          <a href="tel: 0635700638" class="d-inline-block text-decoration-none text-dark">
                            <i class="bi bi-telephoe-fill"></i> +27 63 570 0638
                          </a>
                        </div>
                        <div class="bg-white p-4 rounded mb-4">
                          <h5>Follow Us</h5>
                          <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"> 
                              <i class="bi bi-twitter me-1"></i>
                              twitter
                            </span>
                          </a>
                          <br>
                          <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"> 
                              <i class="bi bi-facebook me-1"></i>
                              facebook
                            </span>
                          </a>
                          <br>
                          <a href="#" class="d-inline-block mb-3">
                            <span class="badge bg-light text-dark fs-6 p-2"> 
                              <i class="bi bi-instagram me-1"></i>
                              instagram
                            </span>
                          </a>
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
    
        <h6 class="text-center bg-dark text-white p-3 m-0">Designied and Developed by SML TECH</h6>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYLzcLA8NL+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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