<?php $title = "View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])) {
?>

<section class="updatePost-section">
    <div class="updatePost-first-div">
        <h1>
            Ajouter des images
        </h1>
        <form action="index.php?action=addImages&amp;id=<?=$post['id'];?>" method="post" enctype="multipart/form-data">
            <div class="radio">
                <label for="title">Image contenu</label><br>
                <input class="createPost-image" type="file" id="title" name="postview_image" />
                <br>
                <div>
                    <input type="submit" class="updatePost-button" value="Envoyer"
                        onclick="return confirm('Confirmez-vous l'\'envois ?')" />
                </div>
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