<?php include($ROOT.$DS."view".$DS."header.php"); ?>


  <!-- Product Details -->
  <section class="product-detail">
  <div class="details">
    <div class="left image-container">
      <div class="main">
        <img src="<?php echo $u->getImage() ?>" id="zoom" alt="<?php echo $u->getProductName() ?>" />
      </div>
    </div>
    <div class="right">
      <span>Accueil/hommes/chemises</span>
      <h1><?php echo $u->getProductName() ?></h1>
      <div class="price"><?php echo $u->getPrice() ?></div>

      <form>
        <select name="size" id="size">
          <option value="" disabled selected hidden>Choisir sa taille</option>
          <option value="1">34</option>
          <option value="2">36</option>
          <option value="3">38</option>
          <option value="4">40</option>
          <option value="5">42</option>
          <option value="6">44</option>
          <option value="7">46</option>
        </select>
      </form>

      <form class="form">
        <input type="number" placeholder="1" min="1" />
        <a href="cart.html" class="addCart">Ajouter</a>
      </form>

      <h3>Détails produit</h3>
      <p>
        <?php echo $u->getDescription() ?>
      </p>
    </div>
  </div>
</section>


