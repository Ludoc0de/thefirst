<?php $title = "View administration";?>

<?php ob_start();?>

<section class="createPost-section">
    <div class="createPost-first-div">
        <h1>
            Creer un article
        </h1>

        <form action="index.php?action=addPost" method="post">
            <div class="createPost-form">
                <label for="title">Titre</label><br>
                <input class="createPost-input" type="text" id="title" name="title" />
                <br>
                <label for="newPost">Contenu</label><br>
                <textarea class="createPost-textarea" name="content" rows="5"></textarea>
            </div>
            <div>
                <input type="submit" id="submit" class="createPost-button" />
            </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>