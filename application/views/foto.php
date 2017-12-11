<?php
require_once 'conexion.php';
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="fotos/".$foto;
move_uploaded_file($ruta,$destino);
?>