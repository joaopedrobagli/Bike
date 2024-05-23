<?php
require_once("../model/BancoDeDados.php");
require_once("../model/Cliente.php");
require_once("../model/Produto.php");
require_once("../model/ControladorBD.php");

class Controlador {
    private $bancoDeDados;

    public function __construct() {
        
        $this->bancoDeDados = ControladorBD::obterInstanciaBanco("localhost", "root", "", "bicicleta");
    }

    public function realizarLogin($email, $senha) {
        $conexao = $this->bancoDeDados->obterConexao();

        $consulta = "SELECT * FROM cliente WHERE email = '$email'";
        $resultado = mysqli_query($conexao, $consulta);

        if ($resultado && mysqli_num_rows($resultado) == 1) {
            $cliente = mysqli_fetch_assoc($resultado);
            $senhaArmazenada = $cliente['senha'];

            if ($senha === $senhaArmazenada) {
                $_SESSION['estaLogado'] = true;
                return true;
            }
        }
        return false;
    }

    public function cadastrarCliente($nome, $email, $cpf, $senha) {
        $cliente = new Cliente($nome, $email, $cpf, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }

    public function cadastrarProduto($nome, $valor){
        $produto = new Produto($nome, $valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function visualizarProduto() {
        $prod = "";
        $listaProduto = $this->bancoDeDados->retornarProduto();
        while ($produto = mysqli_fetch_assoc($listaProduto)) {
            $prod .= "<section class=\"conteudo-bloco\">" .
                     "<h2>" . $produto["nome"] . "</h2>" .
                     "<p>Preço: " . $produto["valor"] . "</p>";
            
            if (isset($produto["imagem"])) {
                $imageURL = "../imgBanco/" . $produto["imagem"];
                $prod .= "<img src=\"$imageURL\" alt=\"" . $produto["nome"] . "\">";
            } else {
                $imageURL = ""; // Se a imagem não estiver disponível, deixe a URL vazia
                $prod .= "<p>Imagem não disponível</p>";
            }
                     
            $prod .= "<button class=\"btn add-to-cart-btn\" data-product-name=\"" . $produto["nome"] . "\" data-product-value=\"" . $produto["valor"] . "\" data-product-image=\"$imageURL\">Adicionar ao Carrinho</button>" .
                     "</section>";
        }
        return $prod;
    }
}    
?>
