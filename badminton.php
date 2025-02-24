<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Badminton</title>
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
        <h1>Badminton Gear</h1>
        <p>Find the best equipment to enhance your Badminton skills!</p>
    </div>
    <br>
   
<!-- Product 1 -->
<div class="container mt-5" style="max-width: 1110px;">
<div class="row">
    <!-- Badminton Product 1 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/badminton/raket.png" class="card-img-top" alt="Badminton Racket">
            <div class="card-body">
                <h5 class="card-title">Badminton Racket</h5>
                <p class="card-text">Lightweight racket designed for professional play.</p>
                <p class="card-text"><strong>Company:</strong> Yonex</p>
                <p class="card-text"><strong>Price:</strong> ₹3,499</p>
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
                <h4 class="card-title">Badminton Academy Nearby</h4>
                <p class="card-text">Improve your skills at the best badminton academy.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Badminton Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹400/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Badminton Product 2 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/badminton/ful.png" class="card-img-top" alt="Shuttlecock">
            <div class="card-body">
                <h5 class="card-title">Shuttlecock</h5>
                <p class="card-text">High-quality feather shuttlecock for tournaments.</p>
                <p class="card-text"><strong>Company:</strong> Li-Ning</p>
                <p class="card-text"><strong>Price:</strong> ₹699</p>
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
                <h4 class="card-title">Badminton Academy Nearby</h4>
                <p class="card-text">Perfect your smashes and footwork.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Smashers Club</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹450/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Badminton Product 3 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/badminton/shoes.png" class="card-img-top" alt="Badminton Shoes">
            <div class="card-body">
                <h5 class="card-title">Badminton Shoes</h5>
                <p class="card-text">Non-marking shoes for better grip and agility.</p>
                <p class="card-text"><strong>Company:</strong> ASICS</p>
                <p class="card-text"><strong>Price:</strong> ₹4,299</p>
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
                <h4 class="card-title">Badminton Academy Nearby</h4>
                <p class="card-text">Focus on footwork and agility drills.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Speedsters</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹500/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Badminton Product 4 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/badminton/net.png" class="card-img-top" alt="Badminton Net">
            <div class="card-body">
                <h5 class="card-title">Badminton Net</h5>
                <p class="card-text">Durable net suitable for indoor and outdoor play.</p>
                <p class="card-text"><strong>Company:</strong> Victor</p>
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
                <h4 class="card-title">Badminton Academy Nearby</h4>
                <p class="card-text">Train for doubles and team coordination.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Doubles Club</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹550/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Badminton Product 5 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/badminton/bag.png" class="card-img-top" alt="Badminton Bag">
            <div class="card-body">
                <h5 class="card-title">Badminton Bag</h5>
                <p class="card-text">Spacious and durable bag for all your gear.</p>
                <p class="card-text"><strong>Company:</strong> Li-Ning</p>
                <p class="card-text"><strong>Price:</strong> ₹2,799</p>
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
                <h4 class="card-title">Badminton Academy Nearby</h4>
                <p class="card-text">Complete training programs for all levels.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Pro Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹600/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Badminton Product 6 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/badminton/kit.png" class="card-img-top" alt="Badminton Kit">
            <div class="card-body">
                <h5 class="card-title">Badminton Kit</h5>
                <p class="card-text">Complete kit with all essential badminton gear.</p>
                <p class="card-text"><strong>Company:</strong> Yonex</p>
                <p class="card-text"><strong>Price:</strong> ₹7,999</p>
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
                <h4 class="card-title">Badminton Academy Nearby</h4>
                <p class="card-text">All-round badminton coaching for aspiring players.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat All-Stars Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹650/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
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

</div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>