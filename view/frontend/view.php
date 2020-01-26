<?php $title = "Manger locale";?>

<?php ob_start();

    $images = [
        "<img class='view-image-size' src=public/images/lune2.jpg>",
        "1",
        "2",
        "3",
        "4",
        "5"
    ];

    for ($i = 0; $i < (count($images)-1); $i++) {
        $images[$i];
    }

?>
<div class="view-subtitle">
    <h2>Derniers articles</h2>
    <div class="circle">
    </div>
</div>

<section class="first-section">
    <?php
        while ($dataPosts = $posts->fetch()) {
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
            <p class="slideText">
                <?=nl2br($dataPosts['content']);?>
            </p>
        </div>

    </div>
    <div class="view-images">
        <?= $images[$i--];?>
    </div>
    <?php
        }
        $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>