<?php

if (@$_POST['login'] == 'Connexion') {
    session_start();
    session_unset();
    $_SESSION['utilisateur'] = $_POST['utilisateur'];
    $_SESSION['panier']['1'] = 0;
    $_SESSION['panier']['2'] = 0;
    $_SESSION['panier']['3'] = 0;
    $_SESSION['panier']['4'] = 0;
    header('Location: index.php');
    exit;
}
?>

<?php require 'inc/head.php'; ?>
<div class="container" style="margin-top:40px">
<div class="row">
  <div class="col-sm-6 col-md-4 col-md-offset-4">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong> Sign in to continue</strong>
      </div>
      <div class="panel-body">
        <form role="form" action="#" method="POST">
          <fieldset>
            <div class="row">
              <div class="center-block">
                <img class="profile-img"
                  src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input class="form-control" placeholder="Username" name="utilisateur" type="text" autofocus>
                  </div>
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-lg btn-primary btn-block" name="login" value="Connexion">
                </div>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
      <div class="panel-footer ">
        Don't have an account ? <a href="#" onClick="">Too bad !</a>
      </div>
            </div>
  </div>
</div>
</div>

<?php require 'inc/foot.php'; ?>
