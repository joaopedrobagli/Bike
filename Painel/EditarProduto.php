<?php
// Aqui você recuperaria o produto pelo ID e preencheria o formulário com seus detalhes
$productId = $_GET['id'];
// Busque o produto no banco de dados pelo ID e preencha o formulário
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edição de Produto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color:#c5baba86;
        }

        .container {
            margin-top: 50px;
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

        .form-group button[type="submit"] {
            padding: 10px 20px;
            background-color: #f9af04;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .form-group button[type="submit"]:hover {
            background-color: #f9af04;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="text-center mb-4">Edição de Produto</h2>
                    <?php
                    // Supondo que você tenha recuperado os detalhes do produto do banco de dados
                    $productId = $_GET['id'];
                    $productName = "Produto Exemplo"; // Substitua com o nome do produto recuperado
                    $productPrice = 10.99; // Substitua com o preço do produto recuperado
                    ?>
                    <form action="atualizar_produto.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $productId; ?>">
                        <div class="form-group">
                            <label for="nome">Nome do Produto:</label>
                            <input type="text" id="nome" name="nome" value="<?php echo $productName; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="preco">Preço do Produto:</label>
                            <input type="number" id="preco" name="preco" step="0.01" min="0" value="<?php echo $productPrice; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="imagem">Imagem do Produto:</label>
                            <input type="file" id="imagem" name="imagem" accept="image/*">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Atualizar Produto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
