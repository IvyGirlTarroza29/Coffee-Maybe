<?php 
   if(isset($_GET["id"]) && $_GET["id"]){
        include_once("models/Products.php");
        $empID = $_GET["id"];
        $emp = Products::search($empID);
        $emp->remove();
   }else{
    header("location: ../create-prod.php");
    die();
   }
?>
