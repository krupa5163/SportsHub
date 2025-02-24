<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Football</title>
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
        <h1>Cricket Gear</h1>
        <p>Find the best equipment to enhance your Cricket skills!</p>
    </div>
    <br>
   
<!-- Product 1 -->
<div class="container mt-5" style="max-width: 1110px;">
<div class="row">
    <!-- Cricket Product 1 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/cricket/bat2.png" class="card-img-top" alt="Cricket Bat">
            <div class="card-body">
                <h5 class="card-title">Cricket Bat</h5>
                <p class="card-text">Premium quality bat for professional gameplay.</p>
                <p class="card-text"><strong>Company:</strong> SG</p>
                <p class="card-text"><strong>Price:</strong> ₹5,499</p>
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
                <h4 class="card-title">Cricket Academy Nearby</h4>
                <p class="card-text">Master batting techniques at the top cricket academy.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Cricket Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹600/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Cricket Product 2 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/cricket/bol.jpg" class="card-img-top" alt="Cricket Ball">
            <div class="card-body">
                <h5 class="card-title">Cricket Ball</h5>
                <p class="card-text">Durable leather ball for professional matches.</p>
                <p class="card-text"><strong>Company:</strong> Kookaburra</p>
                <p class="card-text"><strong>Price:</strong> ₹899</p>
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
                <h4 class="card-title">Cricket Academy Nearby</h4>
                <p class="card-text">Learn bowling from expert coaches.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Bowling Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹550/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Cricket Product 3 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/cricket/halmet.png" class="card-img-top" alt="Cricket Helmet">
            <div class="card-body">
                <h5 class="card-title">Cricket Helmet</h5>
                <p class="card-text">High-protection helmet for safety during play.</p>
                <p class="card-text"><strong>Company:</strong> Gray-Nicolls</p>
                <p class="card-text"><strong>Price:</strong> ₹3,299</p>
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
                <h4 class="card-title">Cricket Academy Nearby</h4>
                <p class="card-text">Perfect your wicket-keeping skills.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Wicket Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹650/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Cricket Product 4 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/cricket/pad.png" class="card-img-top" alt="Batting Pads">
            <div class="card-body">
                <h5 class="card-title">Batting Pads</h5>
                <p class="card-text">Comfortable and lightweight pads for batsmen.</p>
                <p class="card-text"><strong>Company:</strong> SS</p>
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
                <h4 class="card-title">Cricket Academy Nearby</h4>
                <p class="card-text">Focus on improving batting footwork.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Batsmen Club</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹500/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Cricket Product 5 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/cricket/gbls.png" class="card-img-top" alt="Cricket Gloves">
            <div class="card-body">
                <h5 class="card-title">Cricket Gloves</h5>
                <p class="card-text">High-grip gloves ensuring maximum control and safety.</p>
                <p class="card-text"><strong>Company:</strong> GM</p>
                <p class="card-text"><strong>Price:</strong> ₹1,999</p>
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
                <h4 class="card-title">Cricket Academy Nearby</h4>
                <p class="card-text">Expert sessions for improving fielding techniques.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Fielders Club</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹700/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Cricket Product 6 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/cricket/ket2.png" class="card-img-top" alt="Cricket Kit">
            <div class="card-body">
                <h5 class="card-title">Cricket Kit</h5>
                <p class="card-text">Complete cricket kit with all essential gear.</p>
                <p class="card-text"><strong>Company:</strong> DSC</p>
                <p class="card-text"><strong>Price:</strong> ₹12,499</p>
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
                <h4 class="card-title">Cricket Academy Nearby</h4>
                <p class="card-text">Comprehensive cricket coaching covering all skills.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat All-Rounders Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹800/hour</li>
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