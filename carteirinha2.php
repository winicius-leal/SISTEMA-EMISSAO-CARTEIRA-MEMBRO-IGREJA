<?php


$nome = $_POST['nome'];
$funcao = $_POST['funcao'];
$estadocivil = $_POST['estadocivil'];
$sexo = $_POST['sexo'];
$nascimento = $_POST['nascimento'];
$naturalidade = $_POST['naturalidade'];
$nacionalidade = $_POST['nacionalidade'];
$estado = $_POST['estado'];
$batismo = $_POST['batismo'];
$pai = $_POST['pai'];
$mae = $_POST['mae'];
$expedido = date('d/m/Y');




header("Content-type: image/png");



$file = "frente_verso.png";

$new_width = 1000;
$new_height = 328;


list($old_width, $old_height) = getimagesize($file);


$new_image = imagecreatetruecolor($new_width, $new_height); 
$old_image = imagecreatefrompng($file);


imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

$textColor = imagecolorallocate($new_image, 255, 255, 255);



imagestring($new_image, 5, 170, 230, $nome, $textColor);

imagestring($new_image, 5, 265, 280, $funcao, $textColor);

imagestring($new_image, 5, 580, 30, $pai, $textColor);

imagestring($new_image, 5, 580, 95, $mae, $textColor);

imagestring($new_image, 5, 580, 150, $nascimento, $textColor);

imagestring($new_image, 5, 710, 150, $naturalidade, $textColor);

imagestring($new_image, 5, 580, 200, $estado, $textColor);

imagestring($new_image, 5, 710, 200, $estadocivil, $textColor);

imagestring($new_image, 5, 870, 30, $expedido, $textColor);

imagestring($new_image, 5, 870, 92, $sexo, $textColor);

imagestring($new_image, 5, 870, 150, $nacionalidade, $textColor);

imagestring($new_image, 5, 870, 200, $batismo, $textColor);


imagepng($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>