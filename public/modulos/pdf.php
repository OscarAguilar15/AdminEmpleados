<?php

function getHTML($matricula, $nombre, $categoria, $departamento, $horario, $imagen){
    $html='
    <div style="width:300px;margin:0 auto;background-color:white;border-radius:15px;border:1px solid rgba(0,0,0,0.37)">
    <center>
        <img src="../data/img/'.$matricula.'/'.$matricula.'.png" style="width:150px;display: block;margin: 0 auto;">
    </center>
    <div style="width:300px;text-align:center;margin:0 auto;background-color:white">
        <h1>'.$matricula.'</h1>
        <p>'.$nombre.'</p>
        <p>'.$departamento.'</p>
        <p>'.$categoria.'</p>
        <p>'.$horario.'</p>
    </div>
</div>

<div style="width:400px;margin:0 auto;background-color:white;border-radius:15px;border:1px solid rgba(0,0,0,0.37)">
    <center>
        <img src="../data/img/'.$matricula.'/qr_'.$matricula.'.png" style="width:200px"></div></div></div></div>
    </center>
</div>
    ';
    return $html;
}

