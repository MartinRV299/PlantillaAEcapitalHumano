<?php
      //session_start();
      if(!$_SESSION["validar"] || ( Configuraciones::administrador() != $_SESSION['identificador2'] AND Configuraciones::gerencia() != $_SESSION['identificador2'] AND !AccesoRHespecial::pertenece($_SESSION['identificador'],true))){
        header("location:ingreso");
        exit();
      }
      include_once('views/modules/estructura/head.php');
      include_once('views/modules/estructura/asideSwitch.php');
      include_once('views/modules/interfaz/interfazReportesRecursosHumanos.php');
      include_once('views/modules/estructura/footer.php');
      include_once('views/modules/estructura/config.php');