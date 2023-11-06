<!doctype html>
<html>
<!--Título-->
  <head>
    <meta charset="utf-8" />
    <title>GENERADOR DE CREDENCIALES</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
<!--Cuerpo de la página-->
  <body>
    <h1 align="center"><font size="12" color="#0E6655"><em><b>¡BIENVENIDO!</b></em></font></h1>
    <hr/>
    
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/IMSS_Logos%C3%ADmbolo.png" /
    width="100"
    height="100">
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/IMSS_Logos%C3%ADmbolo.png" align="right" /
    width="100"
    height="100"
    >
    <h2 align="center"><font color="#0E6655">PROGRAMA GENERADOR DE CREDENCIALES</font></h2>
    <br/>
    <!--Cuadro con texto-->
    <div>
        <label>MATRICULA:</label>
        <input type="text" name="MATRICULA"/>   
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOMBRE:</label>
        <input type="text" name="NOMBRE"/>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CATEGORIA:</label>
        <input type="text" name="CATEGORIA"/>
    </div>
    <br>
    <div>
        <label>TURNO:</label>
        <input type="text" name="TURNO"/>
        <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DEPARTAMENTO:</label>
        <input type="text" name="NOMBRE"/>
    </div>
    <br>
    <!--Calendario-->
    <label>FECHA DE EXPEDICION:</label>

    <form action="index.php" method="post">
        <br>
        <br>
        <br>
        <input type="submit" value="MENÚ PRINCIPAL">
    </form>
  </body>
</html>