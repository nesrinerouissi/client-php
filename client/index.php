<?php
$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;

$controleur_default = "product" ;

if(!isset($_REQUEST['controller']))
				//$controller récupère $controller_default;
				$controller=$controleur_default;
			else 
				// recupère l'action passée dans l'URL
				$controller = $_REQUEST['controller'];

switch ($controller) {
	
	  
			case "product" :
				require ("{$ROOT}{$DS}controller{$DS}controllerProduct.php");
				break;
				case "client" :
					require ("{$ROOT}{$DS}controller{$DS}controllerClient.php");
					break;
					case "review" :
						require ("{$ROOT}{$DS}controller{$DS}controllerReview.php");
						break;
			case "default" :
				require ("{$ROOT}{$DS}controller{$DS}controllerProduct.php");
				break;
}
?>