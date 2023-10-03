<?php 

class product{
    private $id;
    private $name;
    private $price;
    public function __construct($id,$name,$price)
    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
    }
    public function getFormattedPrice(){
        return number_format($this->price,2);
    }
    public function showDetails(){
        echo "Product Details : \n";
        echo "Id : ".$this->id."\n";
        echo "Name : ".$this->name."\n";
        echo "Price : ".$this->price."\n";  
    }
    
    

}
$product= new product(1,'T-shirt',19.99);
$product->showDetails();