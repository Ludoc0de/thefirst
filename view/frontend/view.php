<?php $title = "Short storie";?>

<?php ob_start()?>

<section class="first-section">
    <?php
        while ($dataPosts = $posts->fetch()) {
    ?>
    <div class="">
        <a class="" href="index.php?action=post&amp;id=<?=$dataPosts['id'];?>">
            <h2>
                <?=htmlspecialchars($dataPosts['title']);?>
            </h2>
        </a>
        <p class="">
            <br>le <?=$dataPosts['creation_date_fr'];?>
        </p>
    </div>
    <?php
        }
        $posts->closeCursor();
    ?>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>