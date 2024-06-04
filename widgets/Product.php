<?php
include("./models/Products.php");

$list = array(
    new Products("Coffee", "Iced/Hot","Americano","./images/iced coffee.jpg","P99.00"),
    new Products("Coffee", "Iced/Hot","Caramel Macchiato","./images/coffee1.jpg","P145.00"),
    new Products("Non Coffee", "Milktea","Thai Milktea","./images/thai.jpg","P130.00"),
    new Products("Non Coffee", "Smoothie","Mango Biscoff Smoothie","./images/mango biscoff smoothie.jpg","P130.00"),
    new Products("Carbonara", "","Tuna Alfredo","./images/Tuna Alfredo.jpg","P180.00"),
    new Products("Pasta Carbonara", "","Penne Arrabiata","./images/Penne Arrabiata.jpg","P185.00"),
    new Products("Carbonara", "","Creamy Carbonara","./images/carbonara.jpg","P190.00"),
    new Products("Pasta", "","Meatballs Marinara","./images/meatballs.jpg","P195.00"),
    new Products("Croissant", " ","Ice Cream Croffle","./images/icecreamcrof.jpg","P180.00"),
    new Products("Croissant", " ","Strawberry Croffle","./images/sberry.jpg","P180.00"),
    new Products("Croissant", " ","Strawberry Nutella Croffle","./images/sberrycrof.jpg","P180.00"),
    new Products("Croissant", " ","Banana Nutella Croffle","./images/bananacrof.jpg","P180.00")


);
?>

    <div class="listing">
        <?php
        foreach ($list as $item) {
            include("widgets/product-card.php");
        }
        ?>
    </div>


