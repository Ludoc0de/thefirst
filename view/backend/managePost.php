<?php $title = "View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])) {
?>

<section class="pt-5">
    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto">Administrer les chapitres</h1>
    </div>
    <div class="row">
        <?php
        while ($dataPosts = $posts->fetch()) {
    ?>
        <div class="col-lg-4 rounded border border-dark bg-white">
            <div>
                <h2 class="text-dark">
                    <?=htmlspecialchars($dataPosts['title']);?>
                </h2>
                <p class="text-black-50">
                    <br>le <?=$dataPosts['creation_date_fr'];?>
                </p>
            </div>
            <div>
                <a class="text-info text-dark" href="index.php?action=updatePostView&amp;id=<?=$dataPosts['id'];?>">
                    Modifier chapitre
                </a>
            </div>
            <div>
                <a class="text-info text-dark"
                    href="index.php?action=moderateCommentView&amp;id=<?=$dataPosts['id'];?>">
                    Modérer commentaire
                </a>
            </div>
            <div>
                <a class="text-danger" href="index.php?action=deletePost&amp;id=<?=$dataPosts['id'];?>"
                    onclick="return confirm('attention suppression définitive !')">
                    Supprimer ?
                </a>
            </div>
        </div>
        <?php
        }
        $posts->closeCursor();
    ?>
    </div>
</section>

<section>
    <div class="row justify-content-end">
        <h3 class="col-lg-4 text-right text-dark border-h3 border-warning mt-3">
            Commentaire signalé dans :
        </h3>
    </div>
    <p class="text-right text-dark">
        <?php
        while ($seeWarning = $seeWarningComment->fetch()) {
            if ($seeWarning['total'] > 0) {
        ?>
        <i class="fas fa-circle text-warning border rounded border-dark"></i>
        <?=$seeWarning['title'];?>
        <br>
        <?php
        }
            }
            $seeWarningComment->closeCursor();
            ?>
    </p>
</section>

<?php
    }
?>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>