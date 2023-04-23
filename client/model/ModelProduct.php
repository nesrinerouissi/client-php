<?php

require_once ("Model.php"); 

class ModelProduct extends Model{

  private $idProduct ;
  private $productName;
  private $price;
  private $quantity;
  private $description;
  private $image;
  private $category;

  
  public static $table = 'product';
  public static $primary = 'idProduct ';
   
  public function __construct($idProduct  = NULL, $productName = NULL, $price=NULL, $quantity=NULL, $description=NULL, $image=NULL, $category=NULL) {
    if (!is_null($idProduct ) && !is_null($productName)) {
      $this->idProduct  = $idProduct ;
      $this->productName = $productName;
      $this->price = $price;
      $this->quantity = $quantity;
      $this->description = $description;
       $this->image = $image; 
       $this->category = $category;
     
     }
  } 
public function getIdProduct () {
       return $this->idProduct ;  
  }
   public function getProductName() {
       return $this->productName;  
  }
   

	public function getCategory() {
		return $this->category;
	}

	public function getImage() {
		return $this->image;
	}

	
	public function getDescription() {
		return $this->description;
	}

	
	public function getPrice() {
		return $this->price;
	}
  public function getQuantity() {
		return $this->quantity;
	}



}
?>
