<?php
    require_once("../config/conexion.php");
    require_once("../models/Interfaz.php");
    $interfaz = new Interfaz();

    switch($_GET["op"]){

        case "guardar":
            $datos=$interfaz->get_factura();
            /* foreach($datos as $row){
                echo $row, "\n";
            } */
            print_r($datos);
        break;

    }
?>