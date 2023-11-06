<div class="container text-center">
    <h1>Agregar trabajador</h1>
</div>


<?php
if(isset($_GET['estado'])){
    $estado=$_GET['estado'];
    switch($estado){
        case "OK":
            ?>
            <div class="container text-center text-white">
            <div class="jumbotron bg-success col-md-6 mx-auto">
                <p>Usuario añadido con éxito</p>
            </div>
            </div>
            <?php
            break;
        case "ERROR":
            ?>
            <div class="container text-center text-white">
            <div class="jumbotron bg-danger col-md-6 mx-auto">
                <p>Error, no es posible añadir al usuario</p>
            </div>
            </div>
            <?php
            break;
        case "USER_ALREADY_EXIST":
            ?>
            <div class="container text-center text-white">
            <div class="jumbotron bg-warning col-md-6 mx-auto">
                <p>Error, el usuario ya estaba registrado anteriormente</p>
            </div>
            </div>
            <?php
            break;
            ?>
        

<?php
    }
    
}

?>

<div class="container">
    <div class="jumbotron bg-light" style="height: 500px;">

        <div class="container row justify-content-center align-items-center" style="height: 100%;">
            <div class="col-6 col-md-6">
                <!---
                <form action="../funciones/agregar_usuario.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="number" class="form-control" name="matricula" placeholder="Matricula">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <input type="text" class="form-control" name="categoria" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control" name="departamento" placeholder="Departamento">
                    </div>
                    <div class="form-group">
                        <label for="turno">turno</label>
                        <input type="text" class="form-control" name="turno" placeholder="Turno">
                    </div>
                    <div class="form-group">
                        <label for="imagen">imagen</label>
                        <input type="file" class="form-control" name="imagen" id="imagen"placeholder="imagen">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>-->


                <form action="../funciones/agregar_usuario.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="number" class="form-control" name="matricula" placeholder="Matricula">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <input type="text" class="form-control" name="categoria" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <input type="text" class="form-control" name="departamento" placeholder="Departamento">
                    </div>
                    <div class="form-group">
                        <label for="turno">turno</label>
                        <input type="text" class="form-control" name="turno" placeholder="Turno">
                    </div>
                    <div class="form-group">
                        <input type="file" name="imagen" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
