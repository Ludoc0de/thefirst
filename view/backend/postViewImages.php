<?php $title = "View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])) {
?>

<section class="postviewImage-section">
    <div class="postviewImage-first-div">
        <h1>
            Ajouter des images
        </h1>
        <form action="index.php?action=addImages&amp;id=<?=$post['id'];?>" method="post" enctype="multipart/form-data">
            <div class="radio">
                <label for="title">Image contenu</label><br>
                <input class="postviewImage-input" type="file" id="content-image" name="postviewImage" required />
            </div>
            <div>
                <input type="submit" class="postviewImage-button" value="Envoyer"
                    onclick="return confirm('Confirmez-vous l'\'envois ?')" />
            </div>
            <div class="imageSend">
            </div>
        </form>
    </div>
    <p>
        <a href="index.php?action=erasePost" class="tag-return">Retour</a>
    </p>
</section>

<?php
    }
?>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>