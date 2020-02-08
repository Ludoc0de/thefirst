<?php

namespace Neographe\Projet5\Model;

require_once 'Manager.php';

class ImagesManager extends Manager
{
    public function getImages($postId)
    {
        $db = $this->dbConnect();
        $images = $db->prepare('SELECT id, postview_image FROM images WHERE post_id=?');
        $images->execute(array($postId));

        return $images;
    }

    public function postImages($postId, $postImages)
    {
        $db = $this->dbConnect();

        $postImage = $db->prepare('INSERT INTO images (post_id, postview_image) VALUES(?, ?)');
        $addImages = $postImage->execute(array($postId, $postImages));

        return $addImages;
    }
}