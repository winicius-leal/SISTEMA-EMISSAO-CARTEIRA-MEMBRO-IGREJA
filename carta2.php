<?php

$tipoCarta = $_POST['tipoCarta'];
$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$igrejaDestino = $_POST['igrejaDestino'];

$nome = strtoupper($nome);
$funcao = strtoupper($funcao);
$tipoCarta = strtoupper($tipoCarta);
$igrejaDestino = strtoupper($igrejaDestino);


header("Content-Type: image/png");


$file = "carta.png";

$new_width = 1200;
$new_height = 1809;

list($old_width, $old_height) = getimagesize($file);


$new_image = imagecreatetruecolor($new_width, $new_height); 

$old_image = imagecreatefrompng($file);


imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

//cor do texto que será inserido na imagem
$textColor = imagecolorallocate($new_image, 0, 0, 0);

if($tipoCarta == 'MUDANÇA'){
    $tipoCarta = 'X';
    imagestring($new_image, 5, 437, 640, $tipoCarta, $textColor);
}

imagestring($new_image, 5, 230, 895, $nome, $textColor);

imagestring($new_image, 5, 250, 935, $funcao, $textColor);

imagestring($new_image, 5, 500, 1270, $funcao, $textColor);

imagestring($new_image, 5, 350, 975, $igrejaDestino, $textColor);

imagepng($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>