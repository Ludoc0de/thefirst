<?php $title = "storie chapter";?>

<?php ob_start()?>

<section class="postView-section">
    <div class="postView-div">
        <h2>
            <u>
                <?=htmlspecialchars($post['title']);?>
            </u>
        </h2>

        <p>
            <?=nl2br($post['content']);?>
        </p>

        <h3 class="postView-h3">Commentaires</h3>

        <form action="index.php?action=addComment&amp;id=<?=$post['id']?>" method="post">
            <div class="postView-form">
                <label for="author">Auteur</label>
                <input type="text" id="author" class="postView-input" name="author" placeholder="Auteur" />
                <br>
                <label for="comment">Commentaire</label>
                <textarea id="comment" class="postView-textarea" name="comment"></textarea>
            </div>
            <div>
                <input type="submit" class="postView-btn-input" value="Envoyer"
                    onclick=" return confirm('Confirmez-vous l\'envois du commentaire ?')" />
            </div>
        </form>
    </div>

</section>
<section class="postView-section">
    <button class="accordion">
        Voir commentaires
        <i class="fas fa-plus"></i>
    </button>
    <div class="postView-comment-div">
        <?php
            while ($comment = $comments->fetch()) {
        ?>
        <p class="postView-second-p">
            <span class="postView-comment-date">
                <i class="fas fa-circle"></i> le
                <?=$comment['comment_date_fr'] . ' par ';?>
            </span>
            <span class="postView-comment-author">
                <?=htmlspecialchars($comment['author']);?>
            </span>
            <a href="index.php?action=warningComment&amp;id=<?=$comment['id'];?>">
                <button type="submit" id="alarm" class="postView-comment-btn"
                    onclick=" return confirm('Confirmez-vous le signalement ?')">
                    <i class="fas fa-bullhorn"></i>
                </button>
            </a>
        </p>
        <p class="postView-third-p">
            <?=nl2br(htmlspecialchars($comment['comment']));?>
        </p>
        <?php
            }   
        ?>
    </div>
</section>
<?php $content = ob_get_clean()?>

<?php require "template.php";?>