<div class="container text-center">
    <h1>Edicion de Registros</h1>
</div>

<div class="container">
    <div class="jumbotron bg-light" style="height: 500px;">

        <div class="container row justify-content-center align-items-center" style="height: 100%;">
            <div class="col-6 col-md-6">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="number" class="form-control" id="matricula" placeholder="Matricula">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <?php 
            if(isset($registro)){
            ?>
            <div class="col-6 col-md-6">

            </div>
            <?php 
            }
            ?>
        </div>
    
    </div>
</div>