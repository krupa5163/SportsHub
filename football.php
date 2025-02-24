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
        <h1>FootBall Gear</h1>
        <p>Find the best equipment to enhance your Football skills!</p>
    </div>
    <br>
    <br>
<!-- Product 1 -->
<div class="container mt-5" style="max-width: 1110px;">
<div class="row">
    <!-- Football Product 1 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/football/foot.jpg" class="card-img-top" alt="Football">
            <div class="card-body">
                <h5 class="card-title">Premium Football</h5>
                <p class="card-text">High-quality football designed for professional matches.</p>
                <p class="card-text"><strong>Company:</strong> Adidas</p>
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
                <h4 class="card-title">Football Academy Nearby</h4>
                <p class="card-text">Train with top coaches and facilities at our local football academy.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Strikers Football Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹700/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Football Product 2 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/football/footbal3.png" class="card-img-top" alt="Football Shoes">
            <div class="card-body">
                <h5 class="card-title">Football Shoes</h5>
                <p class="card-text">Durable and comfortable football shoes for all weather conditions.</p>
                <p class="card-text"><strong>Company:</strong> Nike</p>
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
                <h4 class="card-title">Football Academy Nearby</h4>
                <p class="card-text">Improve your skills with expert coaching sessions.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Football Club</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹750/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Football Product 3 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/football/footbal4.png" class="card-img-top" alt="Goalkeeper Gloves">
            <div class="card-body">
                <h5 class="card-title">Goalkeeper Gloves</h5>
                <p class="card-text">High-grip gloves designed for ultimate control and protection.</p>
                <p class="card-text"><strong>Company:</strong> Puma</p>
                <p class="card-text"><strong>Price:</strong> ₹2,199</p>
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
                <h4 class="card-title">Football Academy Nearby</h4>
                <p class="card-text">Join our goalkeeper training sessions with professional coaches.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Goalkeepers Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹650/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Football Product 4 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/football/footbal5.png" class="card-img-top" alt="Football Jersey">
            <div class="card-body">
                <h5 class="card-title">Football Jersey</h5>
                <p class="card-text">Breathable and lightweight jersey perfect for matches and training.</p>
                <p class="card-text"><strong>Company:</strong> Umbro</p>
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
                <h4 class="card-title">Football Academy Nearby</h4>
                <p class="card-text">Get professional training in team play and strategies.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Elite Football Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹800/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Football Product 5 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/football/footbal6.png" class="card-img-top" alt="Shin Guards">
            <div class="card-body">
                <h5 class="card-title">Shin Guards</h5>
                <p class="card-text">Durable shin guards offering maximum protection during intense matches.</p>
                <p class="card-text"><strong>Company:</strong> Reebok</p>
                <p class="card-text"><strong>Price:</strong> ₹999</p>
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
                <h4 class="card-title">Football Academy Nearby</h4>
                <p class="card-text">Learn defensive skills with our top-rated coaches.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Defenders Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹600/hour</li>
                </ul>
                <a href="#" class="btn btn-info mt-3">View Academy Details</a>
            </div>
        </div>
    </div>

    <!-- Football Product 6 -->
    <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <img src="photo/football/footbal7.png" class="card-img-top" alt="Football Net">
            <div class="card-body">
                <h5 class="card-title">Football Net</h5>
                <p class="card-text">Sturdy and weather-resistant net suitable for all types of football goals.</p>
                <p class="card-text"><strong>Company:</strong> Decathlon</p>
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
                <h4 class="card-title">Football Academy Nearby</h4>
                <p class="card-text">Practice shooting drills with top-tier equipment and coaching.</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Academy Name:</strong> Surat Strikers Net Academy</li>
                    <li class="list-group-item"><strong>Location:</strong> Surat, Gujarat</li>
                    <li class="list-group-item"><strong>Practice Charges:</strong> ₹850/hour</li>
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