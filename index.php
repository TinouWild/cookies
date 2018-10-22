<?php

require 'inc/head.php';

if (isset($_GET['add_to_cart']) != 0) {
    if ($_GET['add_to_cart'] === '46') {
        @$_SESSION['panier']['1'] ++;
    } elseif ($_GET['add_to_cart'] === '36') {
        @$_SESSION['panier']['2'] ++;
    } elseif ($_GET['add_to_cart'] === '58') {
        @$_SESSION['panier']['3'] ++;
    } elseif ($_GET['add_to_cart'] === '32') {
        @$_SESSION['panier']['4'] ++;
    }
}
?>
<section class="cookies container-fluid">
    <form action="" method="get">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Sheldon !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br>
            <?php echo @$_SESSION['panier']['1']. " Pecan nuts !";?>
        </figcaption>
      </figure>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Léonard !</p>
            <a  href="?add_to_cart=36" class="btn btn-primary">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </a><br>
            <?php echo @$_SESSION['panier']['2']. " Chocolate chips !";?>
        </figcaption>
      </figure>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Léonard !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br>
            <?php echo @$_SESSION['panier']['3']. " Chocolate cookie !";?>
        </figcaption>
      </figure>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Sheldon !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><br>
            <?php echo @$_SESSION['panier']['4']. " M&Ms cookies !";?>
        </figcaption>
      </figure>
    </div>
  </div>
</form>
</section>
<?php require 'inc/foot.php'; ?>
