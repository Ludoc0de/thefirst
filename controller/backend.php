<?php

require_once 'model\PostManager.php';
require_once 'model\CommentManager.php';
require_once 'model\ImagesManager.php';

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
function addPost($draft, $title, $content, $view_image)
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $addPost = $postManager->newPost($draft, $title, $content, $view_image);


    if (isset($_FILES['view_image']) AND $_FILES['view_image']['error'] == 0){
        
         if ($_FILES['view_image']['size'] <= 5000000){
             
            $fileInfos = pathinfo($_FILES['view_image']['name']);
            $extension_upload = $fileInfos['extension'];
            $extensions_allowed = array('jpg', 'jpeg', 'JPG', 'JPEG');
            if (in_array($extension_upload, $extensions_allowed))
                {
                  move_uploaded_file($_FILES['view_image']['tmp_name'], 'public/images/' . basename($_FILES['view_image']['name']));
                }
        }
    }

    if ($addPost === false) {
        die("Erreur d'ajout du billet");
    } else {
        header("Location: index.php?action=erasePost");
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
function updatePost($draft, $id, $title, $content, $view_image)
{
    $postManager = new Neographe\Projet5\Model\PostManager();
    $updatePost = $postManager->upgradePost($draft, $id, $title, $content, $view_image);

    if (isset($_FILES['view_image']) AND $_FILES['view_image']['error'] == 0){
        
         if ($_FILES['view_image']['size'] <= 5000000){
             
            $fileInfos = pathinfo($_FILES['view_image']['name']);
            $extension_upload = $fileInfos['extension'];
            $extensions_allowed = array('jpg', 'jpeg', 'JPG', 'JPEG');
            if (in_array($extension_upload, $extensions_allowed))
                {
                  move_uploaded_file($_FILES['view_image']['tmp_name'], 'public/images/' . basename($_FILES['view_image']['name']));
                }
        }
    }

    if ($updatePost === false) {
        die("Erreur de mise à jour du billet");
    } else {
        header("Location: index.php?action=erasePost");
    }
}


//test

function postViewImages()
{   
    //$imageMessage = null;
    $imagesManager = new Neographe\Projet5\Model\ImagesManager();
    $postManager = new \Neographe\Projet5\Model\PostManager();
    $images = $imagesManager->getImages($_GET['id']);
    $post = $postManager->getPost($_GET['id']);

    require 'view\backend\postViewImages.php';
}

function addImages($postId, $postImages)
{
    $imagesManager = new Neographe\Projet5\Model\ImagesManager();
    $addImages = $imagesManager->postImages($postId, $postImages);

     if (isset($_FILES['postviewImage']) AND $_FILES['postviewImage']['error'] == 0){
        
         if ($_FILES['postviewImage']['size'] <= 5000000){
             
            $fileInfos = pathinfo($_FILES['postviewImage']['name']);
            $extension_upload = $fileInfos['extension'];
            $extensions_allowed = array('jpg', 'jpeg', 'JPG', 'JPEG');
            if (in_array($extension_upload, $extensions_allowed))
                {
                  move_uploaded_file($_FILES['postviewImage']['tmp_name'], 'public/images/postimages/' . basename($_FILES['postviewImage']['name']));
                }
        }
    }

    if ($addImages === false) {
        die("Erreur d'ajout de l'image");
    }else {
        header("Location: index.php?action=postViewImages&id=" . $postId);
    }
}

//test

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