<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand font-weight-bold" style="margin-left: 150px" href="#">
    <span style="color: green">TEST</span>SITE</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ml-auto" style="margin-right: 200px">

    <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          ABOUT
        </a>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="about.php">About Us</a>
        <a class="dropdown-item" href="team.php">Team</a>
        <a class="dropdown-item" href="testimonials.php">Testimonials</a>
        <a class="dropdown-toggle text-dark" style="font-size: 13px; margin-left: 25px" href="#" role="button" data-toggle="dropdown" >
          Deep Drop Down </a>
    </div>
    </li>

    <li li class="nav-item">
        <a class="nav-link" href="services.php">SERVICES <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="portfolio.php">PORTFOLIO <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
         <a class="nav-link" href="pricing.php">PRICING <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="blog.php">BLOG <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="contact.php">CONTACT <span class="sr-only"></span></i></a>
    </li>

    <li class="nav-item" style="margin-top: 6px ">|</li>
      <li class="nav-item">
    <a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></i> <span class="sr-only"></span></a>
      </li>

    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i> <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i> <span class="sr-only"></span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fa-brands fa-linkedin"></i> <span class="sr-only"></span></a>
    </li>
    </ul>
  </div>
</nav>
</header>
<body>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">


                        <div class="mid">
                            <img src="img/business.jpg">
                            <div id="containerr">
                                <div class=" text">
                                    <h2 style="font-size: 19px;">Lorem Ipsum Dolor</h2>
                                    <p style="font-size: 12px;">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architectol.</p>
                                    <div class="d-flex justify-content-center div_button">
                                        <button type="button" class="btn btn-outline-success text-white">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>



    </div>
    <div class="carousel-item">
      <img src="img/business.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/business.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</body>
</html>
