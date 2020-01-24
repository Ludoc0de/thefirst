<?php $title = "Manger locale";?>

<?php ob_start()?>

<section class="first-section">
    <?php
        while ($dataPosts = $posts->fetch()) {
            $images = [
                "<img class='view-image-size' src=public/images/lune2.jpg",
                "2",
                "3",
                "4",
                "5"
            ];
            
            foreach($images as $image) {
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
        <?= "$image <br>";?>
    </div>
    <?php
        }
        $posts->closeCursor();
    ?>
    <?php
    }
    ?>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>