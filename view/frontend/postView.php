<?php $title = "storie chapter";?>

<?php ob_start()?>

<section class="post pt-5">
    <div class="row bg-dark text-light rounded">
        <h1 class="mx-auto">Billet simple pour l'Alaska</h1>
    </div>

    <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
        <h2>
            <u>
                <?=htmlspecialchars($post['title']);?>
            </u>
        </h2>

        <p>
            <?=nl2br($post['content']);?>
        </p>

        <h3 class="my-3">Commentaires</h3>

        <form action="index.php?action=addComment&amp;id=<?=$post['id']?>" method="post">
            <div class="form-group">
                <label for="author">Auteur</label>
                <input type="text" id="author" class="bg-light form-control" name="author" placeholder="Auteur" />
            </div>
            <div class="form-group">
                <label for="comment">Commentaire</label>
                <textarea id="comment" class="bg-light form-control" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" class="btn btn-dark mb-3"
                    onclick=" return confirm('Confirmez-vous l\'envois du commentaire ?')" />
            </div>
        </form>
    </div>

    <p class="col-lg-6 col-md-8 mx-auto">
        <a href="index.php" class="text-dark">Retour à la liste des chapitres</a>
    </p>
</section>
<section class="row">
    <div class="col-lg-6 col-md-8 mx-auto">
        <?php
            while ($comment = $comments->fetch()) {
        ?>
        <p class="header-comment">
            <span class="text-secondary">
                <i class="fas fa-circle text-warning border rounded border-dark"></i> le
                <?=$comment['comment_date_fr'] . ' par ';?>
            </span>
            <span class="text-white bg-dark px-1 rounded">
                <?=htmlspecialchars($comment['author']);?>
            </span>
            <a href="index.php?action=warningComment&amp;id=<?=$comment['id'];?>">
                <button type="submit" id="alarm" class="btn btn-warning ml-2 mb-3"
                    onclick=" return confirm('Confirmez-vous le signalement ?')">
                    <i class="fas fa-bullhorn"></i>
                </button>
            </a>
        </p>
        <p class="content-comment text-dark bg-light border-bottom border-secondary ml-4 px-2 pb-4">
            <?=nl2br(htmlspecialchars($comment['comment']));?>
        </p>
        <?php
            }   
        ?>
    </div>
</section>
<?php $content = ob_get_clean()?>

<?php require "template.php";?>