<?php $title = "View administration";?>

<?php ob_start();?>

<section class="createPost-section">
    <div class="createPost-first-div">
        <h1 class="mx-auto px-5 my-1">
            Creer un article
        </h1>
    </div>
    <div class="createPost-second-div">
        <form action="index.php?action=addPost" class="createPost-form" method="post">
            <div>
                <label for="title">Titre</label><br>
                <input class="createPost-input" type="text" id="title" name="title" />
            </div>
            <div>
                <label for="newPost">Contenu</label><br>
                <textarea class="createPost-input" name="content" rows="5"></textarea>
            </div>
            <div>
                <input type="submit" id="submit" class="createPost-button" />
            </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>