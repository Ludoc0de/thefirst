<?php $title = "Administration";?>

<?php ob_start();?>

<section class="login-section">

    <!-- addMember-->
    <!--
    <form class="login-form" action="/thefirst/index.php?action=addMember" method="post">
        <p>Enregister vos identifiants :</p>
        <div class="form-group">
            <input class="login-input" type="text" name="nickname" placeholder="nom d'utilisateur">
            <input class="login-input" type="password" name="pass" placeholder="mot de passe">
        </div>
        <button type="submit" class="button-login"> Enregistrer</button>
    </form>
    -->

    <!-- checklogin-->

    <form class="login-form" action="/thefirst/index.php?action=loginPage" method="post">
        <p>Se connecter ? C'est ici !</p>
        <div>
            <input id="login-pseudo" class="login-input" type="text" name="nickname" placeholder="nom d'utilisateur">
            <input id="login-pass" class="login-input" type="password" name="pass" placeholder="mot de passe">
        </div>
        <button type="submit" class="login-button"> Se connecter</button>
    </form>
</section>

<?php $content = ob_get_clean();?>

<?php require "template.php";?>