<?php 
include 'mvc/modelos/conexion.php';
$id = $_GET['id'];
$eliminar = "DELETE FROM registro WHERE id = '$id'";
$elimina = $conecta->query($eliminar);
header("location:inicio.php");
$conecta->close();

?>
