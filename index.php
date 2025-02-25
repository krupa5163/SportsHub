<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Home</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        #carouselExampleCaptions .carousel-item img {
    height: 650px; /* Adjust the height as needed */
    object-fit: cover; /* Ensures the image covers the space without distortion */
  }
    </style>
</head>

<body>

<?php include('./include/header.php');?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./photo/football/foot.jpg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h1>Football Passion</h1>
        <p>Top-quality footballs and accessories available now.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./photo/cricket/cri.jpg" class="d-block w-100" alt="Slide 2">
        <div class="carousel-caption d-none d-md-block">
        <h1>Cricket Fever</h1>
        <p>Get the best cricket gear for your next match.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./photo/badminton/bad.jpg" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h1>Badminton Gear</h1>
        <p>Smash your way to victory with premium badminton equipment.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="container my-5" style="max-width: 1110px;">
  <h2 class="text-center mb-4">Featured Products</h2>
  <div class="row">
    <!-- Product Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <img src="./photo/cricket/bat2.png" class="card-img-top" alt="Cricket Bat">
        <div class="card-body">
          <h5 class="card-title">Cricket Bat</h5>
          <p class="card-text">Premium quality cricket bat for professional play.</p>
          <p class="card-text"><strong>Price:</strong> ₹2500</p>
          <a href="cart.php" class="btn btn-primary">Add to Cart</a>
          <a href="cart.php" class="btn btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product Card 2 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <img src="./photo/football/footbal5.png" class="card-img-top" alt="Football">
        <div class="card-body">
          <h5 class="card-title">Football</h5>
          <p class="card-text">High-quality football suitable for all surfaces.</p>
          <p class="card-text"><strong>Price:</strong> ₹1200</p>
          <a href="cart.php" class="btn btn-primary">Add to Cart</a>
          <a href="cart.php" class="btn btn-success">Buy Now</a>
        </div>
      </div>
    </div>

    <!-- Product Card 3 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow-sm">
        <img src="./photo/badminton/shoes.png" class="card-img-top" alt="Badminton Racket">
        <div class="card-body">
          <h5 class="card-title">Badminton Shoes</h5>
          <p class="card-text">Lightweight Shoes designed for optimal performance.</p>
          <p class="card-text"><strong>Price:</strong> ₹1800</p>
          <a href="cart.php" class="btn btn-primary">Add to Cart</a>
          <a href="cart.php" class="btn btn-success">Buy Now</a>
        </div>
      </div>
  
  </div>
</div>
</div>
<?php include('./include/footer.php');?>
</body>
</html>
