<?php
require 'inc/head.php';

?>
<section class="cookies container text-center text-danger" style="font-size: 50px;">
    <div class="row">
        <?php
            echo "Vous avez sélectionné :<br/>";
            echo $_SESSION['panier']['1'] . " Pecan nuts !<br/>";
            echo $_SESSION['panier']['2'] . " Chocolate chips !<br/>";
            echo $_SESSION['panier']['3'] . " Chocolate cookie !<br/>";
            echo $_SESSION['panier']['4'] . " M&Ms cookies !";
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>