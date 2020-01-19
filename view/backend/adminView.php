<?php $title = "View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])) {
?>

<section class="pt-5">
    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto px-5 my-1">Selectionner votre action</h1>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <h2>
                <a class="nav-link text-dark" href="index.php?action=createPost">
                    Creer un chapitre
                </a>
            </h2>
        </li>
        <li class="nav-item">
            <h2>
                <a class="nav-link text-dark" href="index.php?action=erasePost">
                    administrer les billets
                </a>
            </h2>
        </li>
    </ul>
</section>

<?php
    }
?>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>