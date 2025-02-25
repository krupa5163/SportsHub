<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SportsHub | Cart</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .cart-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .cart-table img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }
        .remove-btn {
            cursor: pointer;
            color: red;
        }
        .cart-summary {
            border: 1px solid #dee2e6;
            padding: 20px;
            background-color: white;
        }
        .checkout-btn {
            width: 100%;
        }
    </style>
</head>

<body>
<?php include('./include/header.php');?>
<!-- Cart Header -->
<div class="cart-header">
    <h2>Your Shopping Cart</h2>
</div>

<!-- Cart Content -->
<div class="container my-5">
    <div class="row">
        <!-- Cart Table -->
        <div class="col-lg-8">
            <table class="table cart-table table-bordered text-center align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="cartItems">
                    <!-- Example Cart Item -->
                    <tr data-price="1500">
                        <td><img src="./photo//cricket/bat2.png" alt="Cricket Bat"></td>
                        <td>Cricket Bat</td>
                        <td>₹1500</td>
                        <td>
                            <input type="number" class="form-control quantity" value="1" min="1">
                        </td>
                        <td class="item-total">₹1500</td>
                        <td><i class="bi bi-trash remove-btn"></i></td>
                    </tr>

                    <tr data-price="800">
                        <td><img src="./photo/football/foot.jpg" alt="Football"></td>
                        <td>Football</td>
                        <td>₹800</td>
                        <td>
                            <input type="number" class="form-control quantity" value="2" min="1">
                        </td>
                        <td class="item-total">₹1600</td>
                        <td><i class="bi bi-trash remove-btn"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Cart Summary -->
        <div class="col-lg-4">
            <div class="cart-summary">
                <h4>Cart Summary</h4>
                <hr>
                <p><strong>Total Items:</strong> <span id="totalItems">0</span></p>
                <p><strong>Total Price:</strong> ₹<span id="totalPrice">0</span></p>
                <button class="btn btn-success checkout-btn">Proceed to Checkout</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript for Cart Functionality -->
<script>
    const cartItems = document.getElementById('cartItems');
    const totalItems = document.getElementById('totalItems');
    const totalPrice = document.getElementById('totalPrice');

    // Function to update total price and item count
    function updateCart() {
        let total = 0;
        let itemCount = 0;

        const rows = cartItems.querySelectorAll('tr');
        rows.forEach(row => {
            const price = parseFloat(row.dataset.price);
            const quantity = parseInt(row.querySelector('.quantity').value);
            const itemTotal = price * quantity;

            row.querySelector('.item-total').innerText = '₹' + itemTotal;
            total += itemTotal;
            itemCount += quantity;
        });

        totalItems.innerText = itemCount;
        totalPrice.innerText = total;
    }

    // Initial Cart Update
    updateCart();

    // Update cart when quantity changes
    cartItems.addEventListener('input', (e) => {
        if (e.target.classList.contains('quantity')) {
            updateCart();
        }
    });

    // Remove item from cart
    cartItems.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove-btn')) {
            e.target.closest('tr').remove();
            updateCart();
        }
    });
</script>

</body>
</html>
