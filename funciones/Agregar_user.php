<?php

// Comprobar si el archivo se ha enviado correctamente
if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
    // El archivo se ha enviado correctamente

    // Obtener la información del archivo
    $nombre = $_FILES["imagen"]["name"];
    $tipo = $_FILES["imagen"]["type"];
    $tamaño = $_FILES["imagen"]["size"];

    // Mover el archivo a una carpeta en el servidor
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../data/img/". $nombre);

    echo "Error: El archivo no se ha enviado correctamente.";
}