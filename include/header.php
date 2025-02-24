<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .navbar {
            background-color: rgb(8, 8, 8);
            padding: 1rem 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .navbar:hover {
            background-color: rgb(7, 7, 7);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            color: #fff;
        }

        .navbar-nav .nav-link {
            color: #fff;
            margin-right: 20px;
            font-size: 1.1rem;
            transition: color 0.3s ease, transform 0.3s ease, border 0.3s ease;
            border: 2px solid transparent;
            border-radius: 5px;
            padding: 5px 10px;
        }

        .navbar-nav .nav-link i {
            margin-right: 5px;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            color: #ffcc00;
            transform: translateY(-3px);
            border-color: #ffcc00;
            background-color: rgba(255, 204, 0, 0.1);
        }

        .dropdown-menu {
            border-radius: 0;
            background-color:rgb(20, 20, 20);
            animation: dropdownFade 0.3s ease;
        }

        @keyframes dropdownFade {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .dropdown-item {
            color: #fff;
            transition: background-color 0.3s ease;
        }

        .dropdown-item i {
            margin-right: 5px;
        }

        .dropdown-item:hover {
            background-color: #ffcc00;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #ffcc00;
        }

        .btn-outline-light {
            color: #fff;
            border-color: #fff;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-outline-light i {
            margin-right: 5px;
        }

        .btn-outline-light:hover {
            background-color: #ffcc00;
            color: #004aad;
        }

        .btn-light.text-primary {
            background-color: #ffcc00;
            color: #004aad;
            border: none;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-light.text-primary i {
            margin-right: 5px;
        }

        .btn-light.text-primary:hover {
            background-color: #ffd633;
            color: #003080;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-basketball-ball"></i> SportsHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-shopping-bag"></i> Sport Gare
</a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./tabletennis.php"><i class="fas fa-table-tennis"></i> Table Tennis</a></li>
                            <li><a class="dropdown-item" href="./football.php"><i class="fas fa-futbol"></i> Football</a></li>
                            <li><a class="dropdown-item" href="./cricket.php"><i class="fa-solid fa-baseball-bat-ball"></i> Cricket</a></li>
                            <li><a class="dropdown-item" href="./badminton.php"><i class="fa-solid fa-table-tennis-paddle-ball"></i> Badminton</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./cart.php"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php"><i class="fas fa-phone"></i> Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i> </button>
                </form>
                <div class="d-flex">
                    <a href="./login.php" class="btn btn-outline-light me-2"><i class="fas fa-sign-in-alt"></i> Login</a>
                    <a href="./register.php" class="btn btn-light text-primary"><i class="fas fa-user-plus"></i> Register</a>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>