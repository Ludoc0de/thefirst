<?php
session_start();
require 'controller\frontend.php';
require 'controller\backend.php';

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                post();
                viewNumber($_GET['id']);
            } else {
                throw new Exception("aucun identifiant de billet envoyé");
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    throw new Exception("merci de renseigner tous les champs");
                }
            } else {
                throw new Exception("aucun identifiant de billet envoyé");
            }
        }
        // addMember
        elseif ($_GET['action'] == 'addMember') {
            if (!empty($_POST['nickname']) && !empty($_POST['pass'])) {
                addMember($_POST['nickname'], $_POST['pass']);
            } else {
                throw new Exception("merci de renseigner tous les champs");
            }
        }
        //loginPage
        elseif ($_GET['action'] == 'loginPage') {
            loginPage();
        }

        //ADMIN//

        //adminPage
        elseif ($_GET['action'] == 'adminPage') {
            adminPage();
        }

        //creatPage
        elseif ($_GET['action'] == 'createPost') {
            createPost();
        }

        //addPost
        elseif ($_GET['action'] == 'addPost') {
             if (isset($_POST['draft']) && !empty($_POST['title'])) {
                if(!empty($_POST['content']) && !empty($_FILES['view_image']['name'])){
                     addPost($_POST['draft'], $_POST['title'], $_POST['content'], $_FILES['view_image']['name']);
                } else {
                    throw new Exception("merci de renseignez le contenu et l'image");
                }
            }else {
                    throw new Exception("merci de renseignez le titre et le bouton brouillon");
                }
        }

        // postInBackend
        elseif ($_GET['action'] == 'erasePost') {
            postInBackend();
        }

        // deletePost
        elseif ($_GET['action'] == 'deletePost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deletePost($_GET['id']);
            } else {
                throw new Exception("merci de renseigner tous les champs");
            }
        }

        //editPostView
        elseif ($_GET['action'] == 'updatePostView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                editPostView();
            }
        }
        
        //postViewImages
        elseif ($_GET['action'] == 'postViewImages') {
                postViewImages();
        }

        //addImages
        elseif ($_GET['action'] == 'addImages'){
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                addImages($_GET['id'], $_FILES['postviewImage']['name']);
                
            } else {
                var_dump ($_GET['id']);
                throw new Exception("merci de renseigner tous les champs");
            }
        }
   
        // updatePost
        elseif ($_GET['action'] == 'updatePost') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                updatePost($_POST['draft'], $_GET['id'], $_POST['title'], $_POST['content'], $_FILES['view_image']['name']);
            } else {
                throw new Exception("merci de renseigner tous les champs");
            }
        }

        //moderateCommentView
        elseif ($_GET['action'] == 'moderateCommentView') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                moderateCommentView();
            }
        }

        //moderateComment
        elseif ($_GET['action'] == 'moderateComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                moderateComment($_GET['id'], $_POST['author'], $_POST['comment']);
            } else {
                throw new Exception("merci de renseigner tous les champs");
            }
        }

        //warningComment
        elseif ($_GET['action'] == 'warningComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                warningComment($_GET['id']);
            } else {
                throw new Exception("pas de id !");
            }
        }

        // deletePost
        elseif ($_GET['action'] == 'deleteComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                deleteComment($_GET['id']);
            } else {
                throw new Exception("pas de id !");
            }
        }

    } else {
        listPosts();
    }

} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}