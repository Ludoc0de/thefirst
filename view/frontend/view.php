<?php $title = "Manger locale";?>

<?php ob_start();?>

<section class="title-section">
    <div class="title">
        <h1>Neographe: présente Guyane food !</h1>
        <p>lets talk about food !</p>
    </div>
    <div class="view-subtitle">
        <h2>Derniers articles</h2>
        <div class="view-subtitle-underline"></div>
    </div>
</section>

<section class="first-section">
    <?php
        while ($dataPosts = $posts->fetch()) {
            if ($dataPosts['draft'] == 0){

    ?>
    <div class="first-div-section">
        <a class="" href="index.php?action=post&amp;id=<?=$dataPosts['id'];?>">
            <h2>
                <?=htmlspecialchars($dataPosts['title']);?>
            </h2>
        </a>
        <p class="">
            <br>le <?=$dataPosts['creation_date_fr'];?>
        </p>

        <div class="containerSlide">
            <div class="slideText">
                <?=($dataPosts['content']);?>
            </div>
        </div>

    </div>
    <div class="view-images">
        <img src="public/images/<?=$dataPosts['view_image'];?>">
    </div>
    <?php
        }}
        $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>