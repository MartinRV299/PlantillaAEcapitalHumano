<?php
    if(!$_SESSION["validar"] || ( Configuraciones::administrador() != $_SESSION['identificador2'] AND !GrupoConciliacion::pertenece($_SESSION['identificador']))){
        header("location:ingreso");
        exit();
      }
      
      include_once('views/modules/estructura/head.php');
      include_once('views/modules/estructura/asideSwitch.php');
      include_once('views/modules/interfaz/interfazConciliacion.php');
      include_once('views/modules/estructura/footer.php');
      include_once('views/modules/estructura/config.php');