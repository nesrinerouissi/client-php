<?php
//$controller = "product";
require_once("{$ROOT}{$DS}model{$DS}ModelProduct.php"); // chargement du modèle

if (isset($_REQUEST['action']))
    /* recupère l'action passée dans l'URL*/
    $action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
else $action = "home";

switch ($action) {

    case "home":
        $view = "home";
        require("{$ROOT}{$DS}view{$DS}view.php");
        break;    
        case "readAll":
            $pagetitle = "Liste de produits";
            $view = "readAll";
    
            // Vérifier si une catégorie a été spécifiée dans l'URL
            $category = isset($_REQUEST['category']) ? $_REQUEST['category'] : '';
    
            if ($category === 'homme' || $category === 'femme' || $category === 'accessoires') {
                $tab_u = ModelProduct::getByCategory($category); // appel au modèle pour récupérer les produits de la catégorie
            } else {
                $tab_u = ModelProduct::getAll(); // appel au modèle pour récupérer tous les produits
            }
    
            require("{$ROOT}{$DS}view{$DS}view.php"); //"redirige" vers la vue
            break;


        
    case "read":
        if (isset($_REQUEST['idProduct'])) {
            $idProduct = $_REQUEST['idProduct'];
            $u = ModelProduct::select($idProduct);
            if ($u != null) {
                $pagetitle = "Details de product";
                $view = "read";
                require("{$ROOT}{$DS}view{$DS}view.php");
            }
        }
        break;

  
}







