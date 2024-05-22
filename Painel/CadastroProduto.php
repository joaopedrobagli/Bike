<!DOCTYPE html>
<html>

<head>
    <title>Cadastrar Produtos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body {
            background-color: #c5baba86;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .form-group input[type="text"]:focus,
        .form-group input[type="number"]:focus,
        .form-group input[type="file"]:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .form-group [type="submit"] {
            padding: 10px 20px;
            width:480px;
            background-color: #f9af04;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        .form-ex [type="submit"] {
            padding: 10px 20px;
            width:480px;
            background-color: #FF0000;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        

        .alert {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
        
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
                        <a class="nav-link btn btn-dark mb-2" href="CadastroProduto.php">Cadastrar Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger mb-2" href="../view/login.php">Log Out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success mb-2" href="../view/inicio.php">Ir para o site</a>
                    </li>
                </ul>
            </div>
            
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center mb-4">Cadastro de Produto</h2>
                    <form method="POST" action="../processamento/processamento.php" enctype="multipart/form-data">
    <div class="form-group">
   
        <label for="nome">Nome do Produto:</label>
        <input type="text" placeholder="Nome" name="inputNome">
    </div>
    <div class="form-group">
        <label for="preco">Preço do Produto:</label>
        <input type="number" placeholder="Valor" name="inputValor">
    </div>
    <div class="form-group">
        <label for="imagem">Imagem do Produto:</label>
        <input type="file" name="inputImagem" accept="image/*">
    </div>
 
    <div class="form-group">
        <input type="submit" value="Cadastrar">
    </div>
</form>

                </div>
   
</body>
</html>

