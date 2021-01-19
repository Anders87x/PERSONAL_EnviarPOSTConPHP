<?php
    require_once("../models/Servicio.php");
    $servicio = new Servicio();

    switch($_GET["op"]){

        case "guardar":
            $datos=$servicio->insert_servicio($_POST["NrAnalitico"]);
            echo $datos;
        break;

    }
?>