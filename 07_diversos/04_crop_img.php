<?php

$arquivo = './07_diversos/paisagem.jpg';
$width = 300;
$height = 300;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDestino = $width / $height;

$finalWidth = 0;
$finalHeight = 0;
$finalX = 0;
$finalY = 0;

if ($ratioDestino > $ratio) {
    $finalWidth = $height * $ratio;
    $finalHeight = $height;
} else {
    $finalHeight = $width / $ratio;
    $finalWidth = $width;
}

if($finalWidth < $width) {
    $finalWidth = $width;
    $finalHeight = $width / $ratio;

    $finalY = -(($finalHeight - $height) / 2);
} else {
    $finalHeight = $height;
    $finalWidth = $height * $ratio;

    $finalX = -(($finalWidth - $width) / 2);
}


$imagem = imagecreatetruecolor($width, $height);

$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem, $originalImg, $finalX, $finalY, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

imagejpeg($imagem, './07_diversos/nova_paisagem_crop.jpg', 100);
