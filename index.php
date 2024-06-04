<?php

    $path = "./widgets/";
    $header = $path."header.php";
    $homehero = $path."homehero.php";
    $about = $path."about.php";
    $product = $path."Product.php";
    $review = $path."reviews.php";
    $menu = $path."menu.php";
    $reviews = $path."reviews.php";
    $map = $path."map.php";
    $footer = $path."footer.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Maybe</title>
    <script src="main.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<header>
        <div class="wrap">
            <?php include($header)?>
        </div>
</header>

<body>
    <div class="wrapper">

        <div id="homehero-section" class="homehero">
            <?php include($homehero)?>
        </div>

        <div id="about-us" class="about-us">
            <?php include ($about)?>
        </div>

        <div id="products" class="products">

                <h2>Products</h2>

                <div class="product-content">
                    <?php include ($product)?>
                </div>

                

                <div class="menu">
                    <?php include ($menu)?>
                </div>

        </div>

            <div id="testimonials" class="testimonials">               
                <div class="reviews">
                    <?php include ($reviews)?>
                </div>               
            </div>

                <?php include ($map)?>       
                
    </div>
</body>

<footer>
            <div id="footer" class="footer">
                <?php include ($footer)?>
            </div>
</footer>
</html>