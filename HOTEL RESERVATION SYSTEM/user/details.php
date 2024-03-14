<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMLbookings | More Details</title>
  <link rel="shortcut icon" href="../upload/icon.png" type="image/ico" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- hide form -->
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
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: 80vh;
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
    .fa-star{
      color: gold;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">More Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
      <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-6">
                            <img src="../upload/room-1.jpeg" class="img-fluid rounded">
                      </div>
                      <div class="col-md-6">
                        <h4 class="mb-3">Simple Room Name</h4>
                        <h5 class="mb-3">R600 per night</h5>
                        <div class="features mb-3">
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
                         <div class="facilities mb-3">
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
                          <div class="guests mb-3 float-left">
                            <h6 class="mb-1">Guests</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                              5 Adults
                             </span>
                             <span class="badge rounded-pill bg-light text-dark text-wrap">
                              3 Children
                             </span>
                          </div>
                          <div class="rating mb-3 float-right">
                            <span class="badge rounded-pill bg-light">
                              <i class="nav-icon fas fa-star"></i>
                              <i class="nav-icon fas fa-star"></i>
                              <i class="nav-icon fas fa-star"></i>
                             </span>
                          </div>
                          <a href="../security/login.php" class="btn btn-sm w-100 text-white shadow-none mb-4" style="background: #343a40; margin-right: 5%;">Book Now</a>  
                      </div>
                    </div>
                  </div>  
            </div>

            <div class="col-lg-12 p-2">
              <div class="swiper-slide bg-white p-4 border-0 shadow">
                <div class="profile d-flex align-items-center pb-4">
                  <h4 class="m-0 ms-0 px-0">Description</h4>
                </div>
                <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                  Atque iusto mollitia quam, esse alias error suscipit distinctio 
                  reprehenderit nulla quia cupiditate minima cumque nesciunt unde 
                  porro doloremque voluptates! A, impedit minus ab odio, laborum 
                  tempora optio quis veniam totam ex hic, sapiente molestiae placeat. 
                  Dolorum, accusamus. At officia voluptate autem dicta deleniti? 
                  Rerum a sequi voluptatibus consequatur id ea modi perferendis eum sit, 
                  consectetur dolore eveniet fuga eos pariatur assumenda?
                </p>

              </div>
            </div>

            <div class="col-lg-12 p-2">
              <div class="border-0 shadow">
                <div class="swiper-slide bg-white p-4">
                  <div class="profile d-flex align-items-center pb-4">
                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    <h5 class="m-0 ms-2 px-2">Random user1</h5>
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
                <hr>
                <div class="swiper-slide bg-white p-4">
                  <div class="profile d-flex align-items-center pb-4">
                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    <h5 class="m-0 ms-0 px-0">Random user2</h5>
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
                <hr>
                <div class="swiper-slide bg-white p-4">
                  <div class="profile d-flex align-items-center pb-4">
                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    <h5 class="m-0 ms-0 px-0">Random user3</h5>
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
                <hr>
                <div class="swiper-slide bg-white p-4">
                  <div class="profile d-flex align-items-center pb-4">
                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
                    <h5 class="m-0 ms-0 px-0">Random user4</h5>
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
      </section>
      <h6 class="text-center bg-dark text-white p-3 m-0">Designied and Developed by LINGANISO SOLETHU</h6>


<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../js/main.js"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</body>
</html>
