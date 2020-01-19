<?php

require_once 'Manager.php';

class PostManager extends Manager
{
    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin\') AS creation_date_fr FROM posts WHERE id=?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function newPost($title, $content)
    {
        $db = $this->dbConnect();

        $addPosts = $db->prepare('INSERT INTO posts (title, content, creation_date) VALUES(?, ?, Now())');
        $addPost = $addPosts->execute(array($title, $content));

        return $addPost;
    }

    public function removePost($postId)
    {
        $db = $this->dbConnect();

        $remove = $db->prepare('DELETE FROM posts WHERE id=?');
        $deletePost = $remove->execute(array($postId));

        return $deletePost;
    }

    public function upgradePost($id, $title, $content)
    {
        $db = $this->dbConnect();

        $upgrade = $db->prepare('UPDATE posts SET title=?, content=? WHERE id=?');
        $updatePost = $upgrade->execute(array($title, $content, $id));

        return $updatePost;
    }
}