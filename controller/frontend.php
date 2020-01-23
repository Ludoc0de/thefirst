<?php
require_once 'model\PostManager.php';
require_once 'model\CommentManager.php';
require_once 'model\LogManager.php';

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require 'view\frontend\view.php';
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require 'view\frontend\postView.php';
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();
    $addComment = $commentManager->postComment($postId, $author, $comment);

    if ($addComment === false) {
        die("Erreur d'ajout du commentaire");
    } else {
        header("Location: index.php?action=post&id=" . $postId);
    }
}

//verify member
function loginPage()
{
    $loginMessage = null;

    if (!empty($_POST['nickname']) && !empty($_POST['pass'])) {
        checkLogin($_POST['nickname'], $_POST['pass']);
        $loginMessage = "identifiant ou mot de passe incorrect";

    } elseif (isset($_POST['nickname']) || isset($_POST['pass'])) {
        $loginMessage = "merci de renseigner tous les champs";
    }

    require 'view\frontend\login.php';
}

function checkLogin($nickname, $pass)
{
    $logManager = new LogManager();
    $check = $logManager->logIn($nickname, $pass);
    $checkPass = password_verify($_POST['pass'], $check['pass']);

    if ($checkPass) {
        $_SESSION['id'] = $check['id'];
        $_SESSION['nickname'] = $check['nickname'];

        header("Location: index.php?action=adminPage");
    }
}

function adminPage()
{
    require "view/backend/adminView.php";

}