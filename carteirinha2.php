<?php


$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$estadocivil = $_POST['estadocivil'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$naturalidade = $_POST['naturalidade'];
$nacionalidade = $_POST['nacionalidade'];
$estado = $_POST['estado'];
$expedido = date('d/m/Y');
$cpf = $_POST['cpf'];



header("Content-Type: image/png");



$file = "novo.png";

$new_width = 1000;
$new_height = 328;


list($old_width, $old_height) = getimagesize($file);


$new_image = imagecreatetruecolor($new_width, $new_height); 
$old_image = imagecreatefrompng($file);


imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

$textColor = imagecolorallocate($new_image, 0, 0, 0);



imagestring($new_image, 5, 150, 196, $nome, $textColor);

imagestring($new_image, 5, 200, 250, $funcao, $textColor);

imagestring($new_image, 5, 623, 61, $nascimento, $textColor);

imagestring($new_image, 5, 870, 60, $naturalidade, $textColor);

imagestring($new_image, 5, 590, 97, $estado, $textColor);

imagestring($new_image, 5, 625, 24, $estadocivil, $textColor);

imagestring($new_image, 5, 615, 132, $expedido, $textColor);

imagestring($new_image, 5, 820, 24, $sexo, $textColor);

imagestring($new_image, 5, 875, 97, $nacionalidade, $textColor);

imagestring($new_image, 5, 790, 134, $cpf, $textColor);



imagepng($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>