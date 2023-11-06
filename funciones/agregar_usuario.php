<?php
include_once('conexion.php');
include_once('../lib/phpqrcode/qrlib.php');

$matricula = intval($_POST["matricula"]);
$nombreUsuario = $_POST["nombre"];
$categoria = $_POST["categoria"];
$turno = $_POST["turno"];
$depa = $_POST["departamento"];
// Comprobar si el archivo se ha enviado correctamente
if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"])) {
    $nombre_directorio = "../data/img/".$matricula."/";
    if (!file_exists($nombre_directorio)) {
        mkdir($nombre_directorio, 0777, true);
    } 

    // Configura el tamaño del código QR (1-10)
    $tamano = 5;
    // Crea el código QR en formato PNG
    // Crea el código QR en formato PNG
    //QRcode::png($matricula, false, QR_ECLEVEL_H, $tamano); // Reemplaza QR_ECLEVEL_H por el nivel de corrección correcto
    QRcode::png($matricula, $nombre_directorio."/"."qr_".$matricula.".png");
    
    // Guarda el código QR como imagen

    $nombre = $_FILES["imagen"]["name"];
    $tipo = $_FILES["imagen"]["type"];
    $tamaño = $_FILES["imagen"]["size"];
    //imagepng($qr, "../data/img/".$matricula."/","qr_".$matricula.".png");
    // Mover el archivo a una carpeta en el servidor
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../data/img/". $matricula."/".$matricula.".png");

}
//direccion de  la imagen
$nombre_img= $matricula.".png";

//verificar si el usuario exite
$stmt = Conexion::consultar()->prepare("SELECT * FROM `Empleados` where Matricula=$matricula");

$stmt -> execute();
$consulta_vacia = $stmt->rowCount();

if($consulta_vacia != 0){
    header("Location:../public/agregar.php?estado=USER_ALREADY_EXIST");
}

//agregar usuario
$stmt = null;//por seguridad se vuelve nula la consulta
$stmt = Conexion::insertar()->prepare("INSERT INTO `Empleados` (Matricula, Nombre, Categoria, Turno, Departamento, Imagen) VALUES ( ?, ?, ?, ?, ?, ?)");

$stmt -> bindParam(1, $matricula);
$stmt -> bindParam(2, $nombreUsuario);
$stmt -> bindParam(3, $categoria);
$stmt -> bindParam(4, $turno);
$stmt -> bindParam(5, $depa);
$stmt -> bindParam(6, $nombre_img);

$stmt -> execute();

var_dump($stmt->rowCount());
//die();
if ($stmt->rowCount() > 0) {
    //crear direcotrio para imagen del usuario y codigo QR




    header("Location:../public/agregar.php?estado=OK");
} else {
    header("Location:../public/agregar.php?estado=ERROR");
}

