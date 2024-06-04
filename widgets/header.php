<?php
    $path = "./widgets/";
    $nav = "nav.php";
?>    

        <div class="logo">
            <img src="images/logo.jpg" alt="">
            <h1>COFFEE MAYBE</h1>
        </div>

        <div class="search">
            <form action="search" class="search">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit">Search</button>
            </form>
        </div>

        <div class="navbar">
            <nav>
                <?php include ($nav); ?>
            </nav>           
        </div>

        <div class="addcart">
            <a href="pages/cart.php"><img src="images/shopping-cart.png" alt="Cart"></a>
        </div>
