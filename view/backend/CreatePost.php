<?php $title = "View administration";?>

<?php ob_start();?>

<section class="mx-auto pt-5">
    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto px-5 my-1">Creer un chapitre</h1>
    </div>
    <div class="row">
        <form action="index.php?action=addPost" class="col-lg-8 mx-auto" method="post">
            <div class="form-group mt-3">
                <label for="title">Titre</label><br>
                <input type="text" id="title" class="bg-light form-control" name="title" />
            </div>
            <div class="form-group mx-auto">
                <label for="newPost">Contenu</label><br>
                <textarea id="newPost" class="bg-light form-control" name="content" rows="5"></textarea>
            </div>
            <div>
                <input type="submit" id="submit" class="btn btn-dark mt-1" />
            </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>