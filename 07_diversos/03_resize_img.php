<?php

$arquivo = './07_diversos/paisagem.jpg';
$maxWidth = 200;
$maxHeight = 200;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDestino = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($ratioDestino > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}


$imagem = imagecreatetruecolor($finalWidth, $finalHeight);

$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled($imagem, $originalImg, 0, 0, 0, 0, $finalWidth, $finalHeight, $originalWidth, $originalHeight);

imagejpeg($imagem, './07_diversos/nova_paisagem.jpg', 100);
