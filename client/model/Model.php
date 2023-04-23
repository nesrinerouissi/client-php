<?php
require_once ("{$ROOT}{$DS}config{$DS}Conf.php"); 

class Model{
	  
	private static $pdo;
	public static $table;
	public static $primary ;

	/*créer une seule instance de la classe PDO*/
	public static function Init(){
		$host = Conf::getHostname();
		$dbname = Conf::getDatabase();
		$login = Conf::getLogin();
		$pass = Conf::getPassword();
		try{
			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname",$login,$pass);
			} catch(PDOException $e) {
				die ($e->getMessage()); 
			}
	}
    //permet d'affichier tous les information d'un tablaux
	public static function getAll(){
	    $SQL="SELECT * FROM ".static::$table;
		$rep = Model::$pdo->query($SQL);
	    $rep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
	    return $rep->fetchAll();
	}
    //recherch d'un seul information dons un tablaux
    public static function select($cle_primaire) {
	    $sql = "SELECT * from ".static::$table." WHERE ".static::$primary."=:cle_primaire";
	    $req_prep = Model::$pdo->prepare($sql);
	    $req_prep->bindParam(":cle_primaire", $cle_primaire);
	    $req_prep->execute();
	    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
	    if ($req_prep->rowCount()==0){
			return null;
			
	  	}else{
			$rslt = $req_prep->fetch();
			return $rslt;
		}
	      
  	}


	public function delete($cle_primaire) {
		$sql = "DELETE FROM ".static::$table." WHERE ".static::$primary."=:cle_primaire";
		$req_prep = Model::$pdo->prepare($sql);
		$req_prep->bindParam(":cle_primaire", $cle_primaire);
		$req_prep->execute();
	}

	

  public function update($tab, $cle_primaire) {
    $sql = "UPDATE ".static::$table." SET ";
    foreach ($tab as $cle => $valeur){
        $sql .= $cle."=:".$cle.", ";
    }
    $sql = rtrim($sql, ", ");
    $sql .= " WHERE ".static::$primary."=:id;";
    
    $req_prep = Model::$pdo->prepare($sql);
    $values = array();
    
    foreach ($tab as $cle => $valeur){
        $values[":".$cle] = $valeur;
    }
    $values[":id"] = $cle_primaire;
    
    $req_prep->execute($values);
    $nblignes = $req_prep->rowCount();
    
    if ($nblignes !== 1) {
        // throw an exception or return false to indicate failure
        return false;
    }
    
    $obj = Model::select($cle_primaire);
    return $obj;
}


public function insert($tab){
    // Récupération des noms des colonnes de la table
    $columns = implode(', ', array_keys($tab));

    // Construction de la requête SQL avec les noms des colonnes
    $sql = "INSERT INTO ".static::$table." ({$columns}) VALUES(";
    foreach ($tab as $cle => $valeur){
        $sql .=" :".$cle.",";
    }
    $sql=rtrim($sql,",");
    $sql.=");";

    // Préparation et exécution de la requête SQL
    $req_prep = Model::$pdo->prepare($sql);
    $values = array();
    foreach ($tab as $cle => $valeur) {
        $values[":".$cle] = $valeur;
    }
    $req_prep->execute($values);
}

public static function selectByEmail($email) {
    $sql = " SELECT * FROM " . static::$table . " WHERE email=:email ";
    $req_prep = Model::$pdo->prepare($sql);
    $req_prep->bindParam(":email", $email);
    $req_prep->execute();
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model' . ucfirst(static::$table));
    if ($req_prep->rowCount()==0){
        return null;
    } else {
        $rslt = $req_prep->fetch();
        return $rslt;
    }
}
public static function selectBy($field, $value) {
    $sql = "SELECT * FROM ".static::$table." WHERE ".$field."=:value";
    $req_prep = Model::$pdo->prepare($sql);
    $req_prep->bindParam(":value", $value);
    $req_prep->execute();
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
    if ($req_prep->rowCount() == 0){
        return null;
    } else {
        $result = $req_prep->fetch();
        return $result;
    }
}

public static function getByCategory($category){
    $sql = "SELECT * FROM ".static::$table." WHERE category=:category";
    $req_prep = Model::$pdo->prepare($sql);
    $req_prep->bindParam(":category", $category);
    $req_prep->execute();
    $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Model'.ucfirst(static::$table));
    return $req_prep->fetchAll();
}












}//class
Model::Init();