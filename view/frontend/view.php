<?php $title = "cuisine créole";?>

<?php ob_start();?>

<section class="title-section">
    <div class="title">
        <h1>Food yana!</h1>
        <h2>lets talk about food.</h2>
        <h2>cuisine créole</h2>
    </div>
    <div class="view-subtitle">
        <p>Derniers articles</p>
        <div class="view-subtitle-underline"></div>
    </div>
</section>

<section class="first-section">
    <?php
        while ($dataPosts = $posts->fetch()):
            if ($dataPosts['draft'] == 0):

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
        endif;    
        endwhile;
        $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>