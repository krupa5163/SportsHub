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
            height: 80px;
            padding: 15px;
        }

        .navbar-brand {
            font-weight: bold;
            color: white;
            font-size: 1.5rem;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1.2rem;
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
            width: 600px;
        }

        .icon {
            margin-right: 5px;
            /* Add space between icon and text */
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
                            <i class="bi bi-list icon"></i>Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="swimming.php"><i class="bi bi-droplet icon"></i>Swimming</a></li>
                            <li><a class="dropdown-item" href="football.php"><i class="bi bi-circle icon"></i>Football</a></li>
                            <li><a class="dropdown-item" href="cricket.php"><i class="bi bi-trophy icon"></i>Cricket</a></li>
                            <li><a class="dropdown-item" href="tabletenis.php"><i class="bi bi-award icon"></i>Table Tennis</a></li>
                            <li><a class="dropdown-item" href="badminton.php"><i class="bi bi-activity icon"></i>Badminton</a></li>
                        </ul>

                    </li>
                    </li>    <li class="nav-item">
                        <a class="nav-link" href="product.php"><i class="bi bi-box-arrow-right icon"></i>Product</a>
                    </li>
                         
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><i class="bi bi-envelope icon"></i>Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="bi bi-envelope icon"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-right icon"></i>Logout</a>
             
                  <!--  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="../photo/userphoto/user_photo3.png" alt="User" class="rounded-circle" width="30" height="30">
                            <span class="ms-2">User</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person icon"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear icon"></i> Settings</a></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="bi bi-box-arrow-right icon"></i> Logout</a></li>
                        </ul>-->
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <section id="contant" class="contant main-heading team">
         <div class="row">
            <div class="container">
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-4.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-2.jpg" alt="Mike" style="width:100%">
                     <div class="">
                        <h4>Mike Ross</h4>
                        <p class="title">Art Director</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-3.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-4.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-2.jpg" alt="Mike" style="width:100%">
                     <div class="">
                        <h4>Mike Ross</h4>
                        <p class="title">Art Director</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-3.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-3.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-3 column">
                  <div class="card">
                     <img class="img-responsive" src="images/img-1-4.jpg" alt="John" style="width:100%">
                     <div class="">
                        <h4>John Doe</h4>
                        <p class="title">Designer</p>
                        <p>
                        <div class="center"><button class="button">Contact</button></div>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>