<?php $title = "Administration";?>

<?php ob_start();?>

<section class="login-section">

    <!-- addMember-->

    <!--
    <form class="col-6 offset-3" action="/thefirst/index.php?action=addMember" method="post">
        <p>Enregister vos identifiants :</p>
            <div class="form-group">
                <input class="form-control" type="text" name="nickname" placeholder="nom d'utilisateur">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="pass" placeholder="mot de passe">
            </div>
            <button type="submit" class="button-login"> Enregistrer</button>
    </form>
    -->

    <!-- checklogin-->

    <form class="login-form" action="/thefirst/index.php?action=loginPage" method="post">
        <?php
            if ($loginMessage) {
        ?>
        <div class="alert alert-danger">
            <?=$loginMessage?>
        </div>
        <?php
            }
        ?>
        <p>Page de connexion :</p>
        <div>
            <input class="form-control" type="text" name="nickname" placeholder="nom d'utilisateur">
            <input class="form-control" type="password" name="pass" placeholder="mot de passe">
        </div>
        <button type="submit" class="btn btn-dark button-login"> Se connecter</button>
    </form>
</section>

<?php $content = ob_get_clean();?>

<?php require "template.php";?>