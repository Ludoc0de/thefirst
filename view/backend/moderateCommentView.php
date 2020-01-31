<?php $title ="View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])) {
?>

<section class="moderate-section">
    <div class="moderate-first-div">
        <h1>
            Modérer commentaire
        </h1>
    </div>

    <h2>Commentaires : </h2>
    <p>
        <a href="index.php?action=erasePost" class="tag-return">Retour</a>
    </p>
    <?php
        while ($comment = $comments->fetch()) {
    ?>
    <form action="index.php?action=moderateComment&amp;id=<?=$comment['id'];?>" method="post">
        <div class="moderate-form">
            <label for="author">Auteur</label>
            <?php
                if (($comment['warning']) > 0) {
            ?>
            <p>
                Cet auteur a été signalé : <?=$comment['warning'] . ' fois';?>
            </p>
            <?php
                } else {
            ?>
            <br>
            <?php
                }
            ?>
            <input type="text" id="author" class="moderate-input" name="author" value="<?=$comment['author'];?>" />
            <br>
            <label for="comment">Commentaire</label><br>
            <textarea id="comment" class="moderate-textarea" name="comment"
                rows="5"><?=$comment['comment'];?></textarea>
        </div>
        <div>
            <input type="submit" class="moderate-button" value="Modifier"
                onclick="return confirm('Confirmez-vous la modification ?')" />
        </div>
        <div class="moderate-alert">
            <a href="index.php?action=deleteComment&amp;id=<?=$comment['id'];?>"
                onclick="return confirm('attention suppression définitive !')">
                Supprimer ?
            </a>
        </div>
    </form>
    <?php
        }
    ?>
    <p class="mt-1">
        <a href="index.php?action=erasePost" class="tag-return">Retour</a>
    </p>
</section>
<?php
    }
?>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>