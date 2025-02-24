<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Table Tennis</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #ffd633;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            margin-top: 40px;
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .btn-custom {
            background-color:rgb(134, 132, 41);
            color: white;
            border-radius: 25px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
<?php include('./include/header.php');?>


    <div class="header">
        <h1>Table Tennis Gear</h1>
        <p>Find the best equipment to enhance your table tennis skills!</p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Product Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="photo/tebletennis/tt3.jpg" class="card-img-top" alt="Table Tennis Bat">
                    <div class="card-body">
                        <h5 class="card-title">Table Tennis Bat</h5>
                        <p class="card-text">High-quality bat for precision shots and excellent grip.</p>
                        <a href="#" class="btn btn-custom">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="photo/tebletennis/tt2.jpg" class="card-img-top" alt="Table Tennis Balls">
                    <div class="card-body">
                        <h5 class="card-title">Table Tennis Balls</h5>
                        <p class="card-text">Durable and lightweight balls for smooth gameplay.</p>
                        <a href="#" class="btn btn-custom">Add to Cart</a>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="photo/tebletennis/tt.jpg" class="card-img-top" alt="Table Tennis Table">
                    <div class="card-body">
                        <h5 class="card-title">Table Tennis Table</h5>
                        <p class="card-text">Professional-grade table for competitive matches.</p>
                        <a href="#" class="btn btn-custom">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 SportsHub. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
