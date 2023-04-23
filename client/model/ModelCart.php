<?php


require_once ("Model.php"); 

class ModelCart extends Model{
  private $idCart;

        private $idClient;
        private $idProduct;
        private $quantity;
        private $addDate;

        public static $table = 'cart';
        public static $primary = 'idClient';
        
        public function __construct($idClient = null, $idProduct = null, $quantity = null, $addDate = null) {
          if ( !is_null($idClient) && !is_null($idProduct) &&  !is_null($quantity) && !is_null($addDate) ) {
      
            $this->idClient = $idClient;
            $this->idProduct = $idProduct;
            $this->quantity = $quantity;
            $this->addDate = $addDate;
          }
        }
        
        public function getIdClient() {
          return $this->idClient;
        }
        
        public function getIdProduct() {
          return $this->idProduct;
        }
        
        public function getQuantity() {
          return $this->quantity;
        }
        
        public function getAddDate() {
          return $this->addDate;
        }
      
	/**
	 * @return mixed
	 */
	public function getIdCart() {
		return $this->idCart;
	}

      



}