<?php

require_once 'model\PostManager.php';
require_once 'model\CommentManager.php';

//addmenber
function addMember($nickname, $pass)
{
    $memberManager = new Neographe\Projet5\Model\LogManager();
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $addMember = $memberManager->createMember($nickname, $pass_hash);

}

function createPost()
{
    require "view/backend/CreatePost.php";
}

// addpost
function addPost($title, $content)
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $addPost = $postManager->newPost($title, $content);

    if ($addPost === false) {
        die("Erreur d'ajout du billet");
    } else {
        header("Location: index.php");
    }
}

//postInBackend
function postInBackend()
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $commentManager = new Neographe\Projet5\Model\CommentManager();

    $posts = $postManager->getPosts();
    $seeWarningComment = $commentManager->getAllSignalComment();

    require 'view\backend\managePost.php';
}

// deletepost
function deletePost($postId)
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $deletePost = $postManager->removePost($postId);

    if ($deletePost === false) {
        die("Erreur de suppréssion du billet");
    } else {
        header("Location: index.php?action=erasePost");
    }
}

//editPostView
function editPostView()
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $post = $postManager->getPost($_GET['id']);

    require 'view\backend\updatePostView.php';
}

// updatepost
function updatePost($id, $title, $content)
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $updatePost = $postManager->upgradePost($id, $title, $content);

    if ($updatePost === false) {
        die("Erreur de mise à jour du billet");
    } else {
        header("Location: index.php?action=erasePost");
    }
}

//moderateCommentView
function moderateCommentView()
{
    $commentManager = new Neographe\Projet5\Model\CommentManager();
    $comments = $commentManager->getComments($_GET['id']);

    require 'view\backend\moderateCommentView.php';
}
// moderateComment
function moderateComment($postId, $author, $comment)
{
    $commentManager = new Neographe\Projet5\Model\CommentManager();
    $moderateComment = $commentManager->modifyComment($postId, $author, $comment);

    if ($moderateComment === false) {
        die("Erreur de mise à jour du billet");
    } else {
        header("Location: index.php?action=erasePost");
    }
}
//warningComment
function warningComment($warning)
{
    $commentManager = new Neographe\Projet5\Model\CommentManager();
    $warningComment = $commentManager->signalComment($warning);
    if ($warningComment === false) {
        die("Erreur de mise à jour du billet");
    } else {
        header("Location: index.php");
    }
}
// deleteComment
function deleteComment($postId)
{
    $commentManager = new Neographe\Projet5\Model\CommentManager();
    $deleteComment = $commentManager->removeComment($postId);

    if ($deleteComment === false) {
        die("Erreur de suppréssion du billet");
    } else {
        header("Location: index.php?action=erasePost");
    }
}