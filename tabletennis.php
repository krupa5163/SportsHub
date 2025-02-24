<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Table Tennis</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
        }

        .card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            background-color: #004aad;
            border-color: #004aad;
        }

        .btn-info:hover {
            background-color: #017a9b;
            border-color: #017a9b;
        }

        .btn-success:hover {
            background-color: #028a0f;
            border-color: #028a0f;
        }
    </style>
</head>

<body>
    <?php include('./include/header.php'); ?>


    <div class="header">
        <h1>Table Tennis Gear</h1>
        <p>Find the best equipment to enhance your table tennis skills!</p>
    </div>
<!-- Product 1 -->

    <div class="container mt-5" style="max-width: 1110px;">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="photo/tebletennis/tt3.jpg" class="card-img-top" alt="Table Tennis">
                    <div class="card-body">
                        <h5 class="card-title">Premium Table Tennis Racket</h5>
                        <p class="card-text">This high-quality table tennis racket is designed for precision and power, perfect for both beginners and professionals.</p>
                        <p class="card-text"><strong>Company:</strong> Butterfly</p>
                        <p class="card-text"><strong>Price:</strong> ₹2,499</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            <button class="btn btn-success"><i class="fas fa-bolt"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 class="card-title">Table Tennis Academy Nearby</h4>
                        <p class="card-text">Enhance your skills with top-notch coaching at our nearest Table Tennis Academy.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Academy Name:</strong> Surat Smashers TT Club</li>
                            <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                            <li class="list-group-item"><strong>Practice Charges:</strong> ₹550/hour</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">View Academy Details</a>
                    </div>
                </div>
            </div>
        </div>
<!-- Product 2 -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="photo/tebletennis/tt2.jpg" class="card-img-top" alt="Table Tennis Balls">
                    <div class="card-body">
                        <h5 class="card-title">Durable Table Tennis Balls</h5>
                        <p class="card-text">Durable and lightweight balls for smooth gameplay.</p>
                        <p class="card-text"><strong>Company:</strong> Stiga</p>
                        <p class="card-text"><strong>Price:</strong> ₹499</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            <button class="btn btn-success"><i class="fas fa-bolt"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 class="card-title">Table Tennis Academy Nearby</h4>
                        <p class="card-text">Enhance your skills with top-notch coaching at another nearby Table Tennis Academy.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Academy Name:</strong> Spin Master TT Academy</li>
                            <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                            <li class="list-group-item"><strong>Practice Charges:</strong> ₹600/hour</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">View Academy Details</a>
                    </div>
                </div>
            </div>
        </div>
<!-- Product 3 -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="photo/tebletennis/tt.jpg" class="card-img-top" alt="Table Tennis Table">
                    <div class="card-body">
                        <h5 class="card-title">Professional Table Tennis Table</h5>
                        <p class="card-text">Professional-grade table for competitive matches.</p>
                        <p class="card-text"><strong>Company:</strong> Donic</p>
                        <p class="card-text"><strong>Price:</strong> ₹15,999</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            <button class="btn btn-success"><i class="fas fa-bolt"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 class="card-title">Table Tennis Academy Nearby</h4>
                        <p class="card-text">Improve your game at one of the finest academies in Surat.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Academy Name:</strong> Pro Spin TT Academy</li>
                            <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                            <li class="list-group-item"><strong>Practice Charges:</strong> ₹700/hour</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">View Academy Details</a>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="photo/tebletennis/tt10.png" class="card-img-top" alt="Table Tennis Balls">
                    <div class="card-body">
                        <h5 class="card-title">Table Tennis Balls Pack</h5>
                        <p class="card-text">Pack of 6 durable and lightweight table tennis balls for smooth gameplay.</p>
                        <p class="card-text"><strong>Company:</strong> Stiga</p>
                        <p class="card-text"><strong>Price:</strong> ₹499</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            <button class="btn btn-success"><i class="fas fa-bolt"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 class="card-title">Table Tennis Academy Nearby</h4>
                        <p class="card-text">Practice with quality equipment and expert coaching at this academy.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Academy Name:</strong> Surat Table Tennis Academy</li>
                            <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                            <li class="list-group-item"><strong>Practice Charges:</strong> ₹500/hour</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">View Academy Details</a>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="photo/tebletennis/tt9.png" class="card-img-top" alt="Table Tennis Net">
                    <div class="card-body">
                        <h5 class="card-title">Professional Table Tennis Net</h5>
                        <p class="card-text">High-quality net for competitive and practice matches.</p>
                        <p class="card-text"><strong>Company:</strong> DHS</p>
                        <p class="card-text"><strong>Price:</strong> ₹1,299</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            <button class="btn btn-success"><i class="fas fa-bolt"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 class="card-title">Table Tennis Academy Nearby</h4>
                        <p class="card-text">Get expert guidance and improve your game with our top coaches.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Academy Name:</strong> Elite TT Academy</li>
                            <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                            <li class="list-group-item"><strong>Practice Charges:</strong> ₹600/hour</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">View Academy Details</a>
                    </div>
                </div>
            </div>
            <!-- Product 6 -->
            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <img src="photo/tebletennis/tt8.png" class="card-img-top" alt="Table Tennis Shoes">
                    <div class="card-body">
                        <h5 class="card-title">Table Tennis Shoes</h5>
                        <p class="card-text">Comfortable and lightweight shoes for professional gameplay.</p>
                        <p class="card-text"><strong>Company:</strong> Li-Ning</p>
                        <p class="card-text"><strong>Price:</strong> ₹3,999</p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary"><i class="fas fa-cart-plus"></i> Add to Cart</button>
                            <button class="btn btn-success"><i class="fas fa-bolt"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                    <div class="card-body">
                        <h4 class="card-title">Table Tennis Academy Nearby</h4>
                        <p class="card-text">Train with top-notch facilities and expert coaches.</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Academy Name:</strong> Pro Spin Academy</li>
                            <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                            <li class="list-group-item"><strong>Practice Charges:</strong> ₹700/hour</li>
                        </ul>
                        <a href="#" class="btn btn-info mt-3">View Academy Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer tag Add -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        <p>&copy; 2024 SportsHub. All Rights Reserved.</p>
        <p>
            <a href="#" class="text-white me-3">Privacy Policy</a>
            <a href="#" class="text-white">Terms & Conditions</a>
        </p>
        <p>Follow us:
            <a href="#" class="text-white ms-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white ms-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="text-white ms-2"><i class="fab fa-instagram"></i></a>
        </p>
    </div>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>