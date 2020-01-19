<?php $title = "View administration";?>

<?php
    ob_start();

    if (isset($_SESSION['nickname'])) {
?>

<section class="pt-5">
    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto">Modifier les chapitres</h1>
    </div>
    <form action="index.php?action=updatePost&amp;id=<?=$post['id'];?>" class="col-lg-8 mx-auto" method="post">
        <div class="form-group mt-3">
            <label for="title">Titre</label><br>
            <input type="text" id="title" name="title" class="bg-light form-control" value="<?=$post['title'];?>" />
        </div>
        <div class="form-group mx-auto">
            <label for="newPost">Contenu</label><br>
            <textarea id="newPost" class="bg-light form-control" name="content"
                rows="5"><?=$post['content'];?></textarea>
        </div>
        <div>
            <input type="submit" class="btn btn-dark mt-1" value="Modifier"
                onclick="return confirm('Confirmez-vous la modification ?')" />
        </div>
    </form>
    <p class="col-lg-8 mx-auto">
        <a href="index.php?action=erasePost" class="text-dark">Retour</a>
    </p>
</section>

<?php
    }
?>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>