<div class="container text-center">
    <h1>Consulta de trabajador</h1>
</div>

<div class="container">
    <div class="jumbotron bg-light" style="height: 800px;">

        <div class="container row justify-content-center align-items-center" style="height: 100%;">
            <div class="col-6 col-md-6">
                <form action="./consulta.php" method="post">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="number" class="form-control" name="matricula" id="matricula" placeholder="Matricula">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <?php 
            if(isset($_POST["matricula"])){
                $matricula = intval($_POST["matricula"]);
                $stmt = Conexion::consultar()->prepare("SELECT * FROM `Empleados` where Matricula=$matricula");

                $stmt -> execute();
                $registro = $stmt->fetch();

                if($registro == FALSE){
                    echo "error, usuario no registrado";
                }else{
                $matricula = $registro[0];    
                $nombre = $registro[1];
                $categoria = $registro[2];
                $turno = $registro[3];
                $departamento = $registro[4];
                $imagen_credencial = $registro[5];
            ?>
            <div class="col-6 col-md-6">
                <div class="container">
                    <img src="<?php echo "../data/img/".$matricula."/".$imagen_credencial; ?>" class="img-fluid">
                </div>

                <div>
                    Matricula: <?php echo $matricula; ?>
                </div>
                <div>
                    Nombre: <?php echo $nombre; ?>
                </div>
                <div>
                    Categoria: <?php echo $categoria; ?>
                </div>
                <div>
                    departamento: <?php echo $departamento; ?>
                </div>
                <div>
                    Turno: <?php echo $turno; ?>
                </div>

                <div>
                    <form action="generarpdf.php" method="post">
                        <input type="hidden" name="matricula" value="<?php echo $matricula; ?>">
                        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                        <input type="hidden" name="categoria" value="<?php echo $categoria; ?>">
                        <input type="hidden" name="departamento" value="<?php echo $departamento; ?>">
                        <input type="hidden" name="turno" value="<?php echo $turno; ?>">
                        <input type="hidden" name="imagen" value="<?php echo $imagen_credencial; ?>">
                        <button class="btn btn-primary" type="submit">
                            Imprimir pdf
                        </button>
                    </form>
                </div>
            </div>
            <?php 
                }
            }
            ?>
        </div>
    
    </div>
</div>