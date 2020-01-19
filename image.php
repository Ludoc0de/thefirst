<?php
$imageSource = imagecreatefromjpeg("public\images\livre.jpg");
$imageDestination = imagecreatetruecolor(35, 35);

$largeur_source = imagesx($imageSource);
$hauteur_source = imagesy($imageSource);
$largeur_destination = imagesx($imageDestination);
$hauteur_destination = imagesy($imageDestination);

imagecopyresampled($imageDestination, $imageSource, 0, 0, 0,0, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

imagejpeg($imageDestination, "public\images\miniLivre2.jpg");