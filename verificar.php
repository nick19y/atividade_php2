<?php
    include "funcoes.php";
    $resultadoLogin = efetuarLogin($_POST["email"], $_POST["senha"]);
    if($resultadoLogin){
        header("Location: formulario.php");
    } else{
        header("Location: login.php");
    }
?>