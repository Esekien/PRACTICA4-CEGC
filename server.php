<?php
    require_once "lib/nusoap.php";
    function getAlumnos($datos){
        if($datos == "Alumnos"){
            return join(",", array(
                "Carlos",
                "Eduardo",
                "Alexandra",
                "Bill"
            ));
        }
        else {
            return "No hay alumnos";
        }
    }
    function getPaises($datos){
        if($datos == "Paises"){
            return join(",", array(
                "Mexico",
                "Brasil",
                "Eu",
                "Alemania"
            ));
        }
        else {
            return "No hay paises";
        }
    }
    $server = new soap_server();
    $server->register("getAlumnos");
    $server->register("getPaises");
    if(!isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA= file_get_contents('php://input');
    $server->service($HTTP_RAW_POST_DATA);
?>