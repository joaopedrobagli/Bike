<!DOCTYPE html>
<html>

<head>
    <title>Teste Painel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark mb-2" href="painel.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark mb-2" href="usuario.php">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark mb-2" href="CadastroProduto.php"> Cadastrar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger mb-2" href="../view/login.php">Log Out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success mb-2" href="../view/inicio.php">Ir para o site</a>
                    </li>
                </ul>
            </div>


    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Cadastro no Sistema</h1>
            <?php
            require_once "../controller/Controlador.php";
                $control = new Controlador();
               echo  $control->visualizarCliente();
            ?>
            </section>
    </section>

</body>
</html>
