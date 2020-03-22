<?php
class Product{

    public $id;
    public $type;
    public $name;
    public $genre;
    public $marque;
    public $description;
    public $price;
    public $discount;
    public $imagef;
    public $imageb;

    
    public static function getAll(){

        $base = connect_to_db();
        $requette = "SELECT *  FROM products;" 
          
        $data = $base->query($requette);

        return $data;
    }

    public function insert(){
        $base = connect_to_db();
        

        $requette = "INSERT INTO products 
        VALUES(null,'$this->type','$this->name','$this->genre','$this->marque','$this->description','$this->price','$this->discount'
        ,'$this->imagef','$this->imageb');";
        $rowInserted = $base->exec($requette);
        if ($rowInserted == 1) {
            header('location:../views/products/allProducts.php');
        }else {
            echo "SQL Error !";
        }
    }

    
    public function edit(){
        $base = connect_to_db();

        $requette = "UPDATE products 
        SET 
        type ='$this->type' ,
        genre ='$this->genre',
        name = '$this->name',
        marque='$this->marque',
        description='$this->description'
        price=$this->price,
        discount=$this->discount,
        imagef ='$this->imagef',
        imageb='$this->imageb' 
        WHERE id=$this->id";
        
       $rowUpdated = $base->exec($requette);
        if ($rowUpdated == 1) {
            header('location:../views/products/allProducts.php');
        }else {
            echo "SQL Error !";
        }
    }

    public function delete(){
        $base = connect_to_db();

        $requette = "DELETE FROM products WHERE id=$this->id;";
        $rowDeleted = $base->exec($requette);
        if ($rowDeleted == 1) {
            header('location:../views/products/allProducts.php');
        }else {
            echo "SQL Error !";
        }
    }
    
}
?>