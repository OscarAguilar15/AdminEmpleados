<?php

// Comprobar si el archivo se ha enviado correctamente
if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
    // El archivo se ha enviado correctamente

    // Obtener la información del archivo
    $nombre = $_FILES["imagen"]["name"];
    $tipo = $_FILES["imagen"]["type"];
    $tamaño = $_FILES["imagen"]["size"];

    // Mover el archivo a una carpeta en el servidor
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "/public/archivos/" . $nombre);

    // Mostrar la información del archivo
    echo "Nombre: " . $nombre . "<br>";
    echo "Tipo: " . $tipo . "<br>";
    echo "Tamaño: " . $tamaño . " bytes";
} else {
    // El archivo no se ha enviado correctamente
    echo "Error: El archivo no se ha enviado correctamente.";
}

?>