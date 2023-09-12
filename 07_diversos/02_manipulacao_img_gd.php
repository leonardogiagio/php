<?php

$imagem = imagecreatetruecolor(300, 300);

$cor = imagecolorallocate($imagem, 255, 0, 0);

imagefill($imagem, 0, 0, $cor);

header("Content-Type: image/jpeg");

imagejpeg($imagem, './07_diversos/nova_imagem.jpg', 100);