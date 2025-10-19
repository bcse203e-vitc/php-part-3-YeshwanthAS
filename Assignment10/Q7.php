<?php

$imagePath = "j2.jpg";

if (!file_exists($imagePath)) {
    die("❌ Image not found! Please place 'sample.jpg' in the same folder.");
}

$img = imagecreatefromjpeg($imagePath);

$textColor = imagecolorallocate($img, 0, 0, 255);

imagestring($img, 5, 20, 20, "VIT Chennai", $textColor);

header("Content-Type: image/jpeg");

imagejpeg($img);

imagedestroy($img);
?>
