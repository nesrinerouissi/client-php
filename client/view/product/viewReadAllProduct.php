

<?php include($ROOT.$DS."view".$DS."header.php"); ?>


<section class="all-products">
<?php include($ROOT.$DS."view".$DS."filtreProducts.php"); ?>

<?php
$category_title = "";
switch($category) {
    case "homme":
        $category_title = "Hommes";
        break;
    case "femme":
        $category_title = "Femmes";
        break;
    case "accessoires":
        $category_title = "Accessoires";
        break;
    default:
        $category_title = "Tous les produits";
        break;
}
?>

<?php
foreach ( $tab_u as $u) {
    echo '<div class="product-item">
            <div class="overlay">
                <a href="index.php?controller=product&action=read&idProduct=' . $u->getIdProduct() . '" class="product-thumb">
                    <img src="' . $u->getImage() . '" alt="image produit" />
                </a>
            </div>
            <div class="product-info">
            <span>' . $category_title . '</span>
                <a href="index.php?controller=product&action=read&idProduct=' . $u->getIdProduct() . '">' . $u->getProductName() . '</a>
                <h4>' . $u->getPrice() . '</h4>
            </div>
            <ul class="icons">
                <li><i class="bx bx-cart"></i></li>
            </ul>
        </div>';
}
?>

  </div>
  <script src="..\..\js\filtre.js"></script>

  </section>



<?php include($ROOT.$DS."view".$DS."footer.php"); ?>
