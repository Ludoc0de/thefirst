<?php $title = "View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])):
?>

<section class="adminView-section">
    <div class="adminView-title">
        <h1>Selectionner votre action</h1>
    </div>
    <div class="adminView-content">
        <ul class="adminView-content-ul">
            <li>
                <h2>
                    <a class="content-a" href="index.php?action=createPost">
                        Creer un article
                    </a>
                </h2>
            </li>
            <li>
                <h2>
                    <a class="content-a" href="index.php?action=erasePost">
                        Administrer les billets
                    </a>
                </h2>
            </li>
        </ul>
    </div>
</section>

<?php
    endif;
?>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>