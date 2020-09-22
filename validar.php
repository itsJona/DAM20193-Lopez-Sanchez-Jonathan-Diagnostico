<?php

    $usuario = $_GET['usuario'];
    $contraseña = $_GET['contra'];

if($usuario == "admin"){
    if($contraseña == "admin"){
    header("Location: tabla.html");
}else{echo "No ha sido posible ingresar, datos erroneos";}
}else{echo "No ha sido posible ingresar, datos erroneos";}

?>