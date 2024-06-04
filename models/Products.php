<?php

class Products{

    public $id;
    public $category;
    public $type;
    public $image;
    public $title;
    public $price;

    public static $tblName = "coffee-maybe";

    function __construct($category,$type,$title,$image,$price){
        $this->category = $category;
        $this->type = $type;
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        }

        function save(){
            require("../dbconfig.php");
            
            $sql = "INSERT INTO ".self::$tblName." (category, type, image, title, price) 
                    VALUES ('".$this->category."',
                            '".$this->type."',
                            '".$this->title."'
                            '".$this->image."',
                            '".$this->price."'
                    )";

            if($conn->query($sql)===TRUE){
                echo "New product created!";
            }else{
                echo "Error while saving data.";
            }
            
            $conn->close();
        }

        function remove(){
            require("../dbconfig.php");
            $sql = "DELETE FROM ".self::$tblName." WHERE id=$this->id";

            if($conn->query($sql)===TRUE){
                header("location:index.php");
            }else{
                echo "Opps! Something went while deleting data.";
            }

            $conn->close();
        }

        function update(){
            require("../dbconfig.php");
            $sql = "UPDATE ".self::$tblName." SET 
                    category='$this->category',
                    type='$this->type',    
                    image='$this->image',    
                    title='$this->title',                 
                    price='$this->price',
                    WHERE id=$this->id";
            if($conn->query($sql) === TRUE){
                header("location:index.php");
            }else{
                echo "Opps! Something went wrong while updating.";
            }

            $conn->close();
        }

        public static function getAll(){
            require("../dbconfig.php");

            $sql = "SELECT * FROM ".self::$tblName;
            $result = $conn->query($sql);

            $conn->close();
            return $result;
        }

        

}
?>
