<?php
session_start();
require 'controller\frontend.php';
require 'controller\backend.php';

try {
    if (isset($_GET['action'])):

        if ($_GET['action'] == 'listPosts'):
            listPosts();
        elseif ($_GET['action'] == 'post'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                post();
                viewNumber($_GET['id']);
            else:
                throw new Exception("aucun identifiant de billet envoyé");
            endif;
        elseif ($_GET['action'] == 'addComment'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                if (!empty($_POST['author']) && !empty($_POST['comment'])):
                    addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                else:
                    throw new Exception("merci de renseigner tous les champs");
                endif;
            else:
                throw new Exception("aucun identifiant de billet envoyé");
            endif;
        endif;
        // addMember uncomment if want addMenber
        /*
        if ($_GET['action'] == 'addMember'):
            if (!empty($_POST['nickname']) && !empty($_POST['pass'])):
            addMember($_POST['nickname'], $_POST['pass']);
            else:
            throw new Exception("merci de renseigner tous les champs");
            endif;
        endif;
        */

        //loginPage
        if ($_GET['action'] == 'loginPage'):
            loginPage();
        endif;
    
        //ADMIN//

        //adminPage
        if ($_GET['action'] == 'adminPage'):
            adminPage();
        endif;

        //creatPage
        if ($_GET['action'] == 'createPost'):
            createPost();
        endif;

        //addPost
         if ($_GET['action'] == 'addPost'):
            if (!isset($_POST['draft'])):
                throw new Exception('merci de renseignez le brouillon');
            elseif (empty($_POST['title'])):
                throw new Exception('merci de renseignez le titre');
            elseif (empty($_POST['content'])):
                throw new Exception('merci de renseignez le contenu');
            elseif (empty($_FILES['view_image']['name'])):
                throw new Exception('merci de renseignez l\'image');
            else:
                addPost($_POST['draft'], $_POST['title'], $_POST['content'], $_FILES['view_image']['name']);
            endif;
        endif;
        
        // postInBackend
        if ($_GET['action'] == 'erasePost'):
            postInBackend();
        endif;

        // deletePost
        if ($_GET['action'] == 'deletePost'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                deletePost($_GET['id']);
            else:
                throw new Exception("merci de renseigner tous les champs");
            endif;
        endif;

        //editPostView
        if ($_GET['action'] == 'updatePostView'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                editPostView();
            endif;
        endif;
        
        //postViewImages
        if ($_GET['action'] == 'postViewImages'):
                postViewImages();
        endif;

        //addImages
        if ($_GET['action'] == 'addImages'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                addImages($_GET['id'], $_FILES['postviewImage']['name']);
            else:
                var_dump ($_GET['id']);
                throw new Exception("merci de renseigner tous les champs");
            endif;
        endif;
   
        // updatePost
        if ($_GET['action'] == 'updatePost'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                updatePost($_POST['draft'], $_GET['id'], $_POST['title'], $_POST['content'], $_FILES['view_image']['name']);
            else:
                throw new Exception("merci de renseigner tous les champs");
            endif;
        endif;

        //moderateCommentView
        if ($_GET['action'] == 'moderateCommentView'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                moderateCommentView();
            endif;
        endif;

        //moderateComment
        if ($_GET['action'] == 'moderateComment'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                moderateComment($_GET['id'], $_POST['author'], $_POST['comment']);
            else:
                throw new Exception("merci de renseigner tous les champs");
            endif;
        endif;

        //warningComment
        if ($_GET['action'] == 'warningComment'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                warningComment($_GET['id']);
            else:
                throw new Exception("pas de id !");
            endif;
        endif;

        // deletePost
        if ($_GET['action'] == 'deleteComment'):
            if (isset($_GET['id']) && $_GET['id'] > 0):
                deleteComment($_GET['id']);
            else:
                throw new Exception("pas de id !");
            endif;
        endif;

    else:
        listPosts();
    endif;

} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}