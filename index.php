<?php

session_start();

if(isset($_SESSION['estaLogado'])){ //Se existe login na session
    
    if($_SESSION['estaLogado'] == TRUE){ //Se existe login e está logado
        header('Location:view/inicio.php'); //Redirecina para a home
    }
    else{ //Se existe login e não está logado
        header('Location:view/login.php'); //Redireciona para o login
    }
}
else{ //Se não existe login na session
    header('Location:view/login.php');
}

?>