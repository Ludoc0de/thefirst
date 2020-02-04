<?php $title = "View administration";?>

<?php ob_start();?>

<section class="createPost-section">
    <div class="createPost-first-div">
        <h1>
            Creer un article
        </h1>

        <form action="index.php?action=addPost" method="post" enctype="multipart/form-data">
            <div class="radio">
                <p class="radio-p">
                    Est-ce un brouillon ?
                </p>
                <label for="oui">Oui</label>
                <input type="radio" name="draft" id="draft-yes" value="1" />
                <label for="non">Non</label>
                <input type="radio" name="draft" id="draft-no" value="0" />
            </div>
            <div class="createPost-form">
                <label for="title">Titre</label><br>
                <input class="createPost-input" type="text" id="title" name="title" />
                <br>
                <label for="newPost">Contenu</label><br>
                <textarea class="createPost-textarea textareaTiny" name="content" rows="5"></textarea>
                <br>
                <label for="title">Image titre</label><br>
                <input class="createPost-image" type="file" id="title" name="view_image" />
                <br>
            </div>
            <div>
                <input type="submit" id="submit" class="createPost-button" />
            </div>
        </form>
    </div>
    <h3>
        <a href="index.php?action=erasePost" class="tag-return">Administrer ? Içi</a>
    </h3>
</section>

<?php $content = ob_get_clean()?>

<?php require "template.php";?>