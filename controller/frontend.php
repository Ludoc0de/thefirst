<?php
require_once 'model/PostManager.php';
require_once 'model/CommentManager.php';
require_once 'model/ImagesManager.php';
require_once 'model/LogManager.php';

function listPosts()
{
    $postManager = new \Neographe\Projet5\Model\PostManager();
    $posts = $postManager->getLastPosts();

    require 'view/frontend/view.php';
}

function post()
{
    $postManager = new \Neographe\Projet5\Model\PostManager();
    $commentManager = new Neographe\Projet5\Model\CommentManager();
    $imagesManager = new \Neographe\Projet5\Model\ImagesManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);
    $images = $imagesManager->getImages($_GET['id']);

    require 'view/frontend/postView.php';
}

function addComment($postId, $author, $comment)
{
    $commentManager = new Neographe\Projet5\Model\CommentManager();
    $addComment = $commentManager->postComment($postId, $author, $comment);

    if ($addComment === false):
        die('Erreur d\'ajout du commentaire');
    else:
        header("Location: index.php?action=post&id=" . $postId);
    endif;
}

//verify member
function loginPage()
{
   
    if (!empty($_POST['nickname']) && !empty($_POST['pass'])):
        checkLogin($_POST['nickname'], $_POST['pass']);
        throw new Exception("identifiant ou mot de passe incorrect");

    elseif (isset($_POST['nickname']) || isset($_POST['pass'])):
        throw new Exception("merci de renseigner tous les champs");
    endif;

    require 'view/frontend/login.php';
}

function checkLogin($nickname, $pass)
{
    $logManager = new Neographe\Projet5\Model\LogManager();
    $check = $logManager->logIn($nickname, $pass);
    $checkPass = password_verify($_POST['pass'], $check['pass']);

    if ($checkPass):
        $_SESSION['id'] = $check['id'];
        $_SESSION['nickname'] = $check['nickname'];

        header("Location: index.php?action=adminPage");
    endif;
}

function adminPage()
{
    require "view/backend/adminView.php";

}