<?php

require_once ("Model.php"); 

class ModelClient extends Model{

  private $idClient;
  private $firstName;
  private $lastName;

  private $email;
  private $password;
  private $address;
  private $phone;
  private $birthDate;

  public static $table = 'client';
  public static $primary = 'idClient';
  public function __construct( $firstName = NULL,$email = NULL,    $password = NULL , $lastName = NULL, $address = NULL, $phone = NULL, $birthDate = NULL)
  {
    if (!is_null($email) && !is_null($firstName) ) {
     
      $this->firstName = $firstName;
	  $this->lastName = $lastName;
      $this->email = $email;
      $this->password = $password;
	  $this->address = $address;
      $this->phone = $phone;
      $this->birthDate = $birthDate;
	  
 


    }
  }
	
	public function getIdClient() {
		return $this->idClient;
	}

	
	
	

	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * @return mixed
	 */
	

	
	
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	

	/**
	 * @return mixed
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * @return mixed
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @return mixed
	 */
	public function getPhone() {
		return $this->phone;
	}
	public function getBirthDate() {
		return $this->birthDate;
	}
}

?>
