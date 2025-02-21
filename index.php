<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
    <style>
        .navbar {
            background-color: rgb(74, 138, 155);
            height: 100px;
            padding: 15px;
   
        }

        .navbar-brand {
            font-weight: bold;
            color: white;
            font-size: 1.7rem;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
        }

        .navbar-nav .nav-link:hover {
            color:rgb(16, 15, 9);
        }

        .dropdown-menu {
            background-color: rgb(74, 138, 155);
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            color:rgb(19, 19, 15);
            background-color: rgb(60, 120, 135);
        }

        .search-bar {
            width: 500px;
        }

        .icon {
            margin-right: 5px;
            /* Add space between icon and text */
        }
        .k1{
         background-color: black;
         height : 50px;
         color : white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#"><i class="bi bi-shop icon"></i>Sport Hub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Search Bar -->
            <form class="d-flex ms-3" action="#" method="GET">
                <input class="form-control search-bar" type="search" placeholder="Search Products" aria-label="Search" name="search">
                <button class="btn btn-outline-light ms-2" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="collapse navbar-collapse" id="navbarNav">
               
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"><i class="bi bi-house icon"></i>Home</a>
                    </li>
                    <!-- Dropdown for Categories -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-list icon"></i>Product
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="swimming.php"><i class="bi bi-droplet icon"></i>Swimming</a></li>
                            <li><a class="dropdown-item" href="football.php"><i class="bi bi-circle icon"></i>Football</a></li>
                            <li><a class="dropdown-item" href="cricket.php"><i class="bi bi-trophy icon"></i>Cricket</a></li>
                            <li><a class="dropdown-item" href="tabletenis.php"><i class="bi bi-award icon"></i>Table Tennis</a></li>
                            <li><a class="dropdown-item" href="badminton.php"><i class="bi bi-activity icon"></i>Badminton</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php"><i class="bi bi-envelope icon"></i>About Us</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="bi bi-envelope icon"></i>Contact Us</a>
                    </li>
                  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <!--<img src="../photo/userphoto/user_photo3.png" alt="" class="rounded-circle" width="30" height="30">-->
                            <span class="ms-2">User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person icon"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear icon"></i> Settings</a></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right icon"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <ul class="login">
                              <li class="login-modal">
                                 <a href="#" class="login"><i class="fa fa-user"></i>Login</a>
                              </li>
                              <li>
                                 <div class="cart-option">
                                    <a href="#"><i class="fa fa-shopping-cart"></i>Register</a>
                                 </div>
                              </li>
                           </ul>
      </div>
    </nav> 
    <div class="k1">
               <h3>categoris</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">News</li>
               </ul>
            </div>
            <div class="inner-information-text">
        </div>
      </section>
      <img src="image/cricket4.jpeg" alt="">
      <section id="contant" class="contant">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-sm-12 col-xs-12">
                  <div class="news-post-holder">
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">20 march 2016</span>
                              <h2><a href="blog-detail.html">Free play to ground in anywhere</a></h2>
                              <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">20 march 2016</span>
                              <h2><a href="blog-detail.html">Free play to ground in anywhere</a></h2>
                              <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">20 march 2016</span>
                              <h2><a href="blog-detail.html">Free play to ground in anywhere</a></h2>
                              <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="news-post-widget">
                           <img class="img-responsive" src="images/img-01_002.jpg" alt="">
                           <div class="news-post-detail">
                              <span class="date">20 march 2016</span>
                              <h2><a href="blog-detail.html">Free play to ground in anywhere</a></h2>
                              <p>Just hours after that his grandma had died, Angel Di Maria imagined how she might react if he didn't play</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-xs-12">
                  <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                     <div class="top-stroy-header">
                        <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                        <span class="date">July 05, 2017</span>
                        <h2>Other Headlines</h2>
                     </div>
                     <ul class="other-stroies">
                        <li><a href="#">Wenger Vardy won't start</a></li>
                        <li><a href="#">Evans: Vardy just</a></li>
                        <li><a href="#">Pires and Murray </a></li>
                        <li><a href="#">Okazaki backing</a></li>
                        <li><a href="#">Wolfsburg's Rodriguez</a></li>
                        <li><a href="#">Jamie Vardy compared</a></li>
                        <li><a href="#">Arsenal target Mkhitaryan</a></li>
                        <li><a href="#">Messi wins libel case.</a></li>
                     </ul>
                  </div>
                  <aside id="sidebar" class="right-bar">
                     <div class="banner">
                        <img class="img-responsive" src="images/adds-3.jpg" alt="#">
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="#"><img src="images/footer-logo.png" alt="#" /></a>
                        </div>
                        <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="about.html">About Us</a></li>
                           <li><a href="team.html">Our Team</a></li>
                           <li><a href="news.html">Latest News</a></li>
                           <li><a href="matche.html">Recent Matchs</a></li>
                           <li><a href="blog.html">Our Blog</a></li>
                           <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Contact us</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                           <li><i class="fa fa-phone"></i> 123 456 7890</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2018 Distributor: <a href="https://themewagon.com/" target="_blank">ThemWagon</a></p>
            </div>
         </div>
      </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>