<?php
session_start();

require_once("../controller/Controlador.php");
require_once("../model/ClienteFactory.php");
require_once("../model/ProdutoFactory.php");
require_once("../model/BancoDeDados.php");

$controlador = new Controlador();

// Cadastro de cliente
if (isset($_POST['inputNome']) && isset($_POST['inputEmail']) && isset($_POST['inputCPF']) && isset($_POST['inputSenha'])) {

    $nome = $_POST['inputNome'];
    $email = $_POST['inputEmail'];
    $cpf = $_POST['inputCPF'];
    $senha = $_POST['inputSenha'];

    $controlador->cadastrarCliente($nome, $email, $cpf, $senha);

    header('Location:../view/login.php');
    die();
}

// Cadastro de produto
if (isset($_POST['inputNome']) && isset($_POST['inputValor']) && isset($_FILES['inputImagem'])) {

    $nome = $_POST['inputNome'];
    $valor = $_POST['inputValor'];
    $imagem = $_FILES['inputImagem'];

    // Verifica se não houve erro no upload
    if ($imagem['error'] === 0) {
        // Move a imagem para o diretório desejado
        $caminhoImagem = '../imgBanco/' . $imagem['name'];
        move_uploaded_file($imagem['tmp_name'], $caminhoImagem);

        // Cadastra o produto com a imagem
        $controlador->cadastrarProduto($nome, $valor, $caminhoImagem);
    } else {
        // Lidar com erros de upload, se necessário
        echo 'Erro ao enviar a imagem.';
    }

    header('Location:../Painel/CadastroProduto.php');
    die();
}

// Verificação de login
if (isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])) {
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    // Realiza o login com base nos dados fornecidos
    if ($controlador->realizarLogin($email, $senha)) {
        $_SESSION['estaLogado'] = true;

        // Verifica se o usuário é um funcionário
        if (endsWith($email, '@admin.com')) {
            header('Location:../Painel/painel.php'); // Redireciona para a página do funcionário
        } else {
            header('Location:../view/inicio.php'); // Redireciona para a home do cliente após o login bem-sucedido
        }
        exit();
    } else {
        $_SESSION['erro'] = "Email ou senha incorretos!"; // Define a mensagem de erro
        header('Location:../view/login.php'); // Redireciona de volta para a página de login com mensagem de erro
        exit();
    }
} else {
    header('Location:../view/login.php'); // Redireciona de volta para a página de login se os dados não forem enviados
    exit();
}

// Função para verificar se uma string termina com outra
function endsWith($string, $endString) {
    $len = strlen($endString);
    if ($len == 0) {
        return true;
    }
    return (substr($string, -$len) === $endString);
}
?>
