<?php
    $path = "../pages/";
    $page = file($path."product.php");
    $anpath = "../widgets/";
    $nav = $anpath."nav.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cart</title>

    <link rel="stylesheet" href="../styles/style.css">
</head>

<header>
    
    <!-- <div class="wrap">
        <div class="logo">
            <img src="../images/logo.jpg" alt="">
            <h1>COFFEE MAYBE</h1>
        </div>

        <div class="search">
            <form action="search" class="search">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="nav">
            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php">Products</a></li>
                    <li><a href="../index.php">Reviews</a></li>
                    <li><a href="../index.php">Contact Us</a></li>
            </nav>
        </div>

        <div class="addcart">
            <a href="../pages/cart.php"><img src="../img/shopping-cart.png" alt="Cart"></a>
        </div>
    </div> -->
    <div class="navbar">
    <?php include ($nav);?></div>
</header>
    <?php include ($page);?>
<body>
    <div class="cart">
        <h2>Shopping Cart</h2>
        <ul id="cartItems"></ul>
        <div id="cartTotal"></div>
    </div>
    
    <script src="main.js"></script>
    
</body>
</html>