<?php
    if(!$_SESSION["validar"] /*|| !AccesoSoporte::perteneceAsoporte($_SESSION['identificador'])*/){
        header("location:ingreso");
        exit();
    }

    include_once('views/modules/estructura/head.php');
    include_once('views/modules/estructura/asideSwitch.php');
    include_once('views/modules/interfaz/interfazTicketsUsuarios2.php');
    include_once('views/modules/estructura/footer.php');
    include_once('views/modules/estructura/config.php');