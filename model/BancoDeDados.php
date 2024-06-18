<?php


class BancoDeDados {
    private static $instancia;
    private $conexao;
    private $host;
    private $login;
    private $senha;
    private $dataBase;

    private function __construct($Host, $Login, $Senha, $DataBase) {
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
        $this->conectarBD();
    }

    public static function obterInstancia($Host, $Login, $Senha, $DataBase) {
        if (!self::$instancia) {
            self::$instancia = new self($Host, $Login, $Senha, $DataBase);
        }
        return self::$instancia;
    }

    private function conectarBD() {
        $this->conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
        if (!$this->conexao) {
            die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
        }
    }

    public function obterConexao() {
        return $this->conexao;
    }

    private function __clone() {}

    public function __wakeup() {}

    public function inserirCliente($cliente) {
        $conexao = $this->obterConexao();
        $consulta= "INSERT INTO cliente (nome, email, cpf, senha) 
                     VALUES ('{$cliente->get_Nome()}','{$cliente->get_Email()}','{$cliente->get_Cpf()}','{$cliente->get_Senha()}')";
        mysqli_query($conexao,$consulta);
    }

    public function inserirProduto($produto, $caminhoImagem) {
        $conexao = $this->obterConexao();
        $nome = $produto->get_nome();
        $valor = $produto->get_valor();
        $consultaProd= "INSERT INTO produto (nome, valor, imagem) 
                     VALUES ('$nome','$valor','$caminhoImagem')";
        mysqli_query($conexao,$consultaProd);
    }

    public function retornarCliente() {
        $conexao = $this->obterConexao();
        $consulta = "SELECT * FROM cliente";
        $listaCliente = mysqli_query($conexao,$consulta);
        return $listaCliente;
    }

    public function retornarProduto() {
        $conexao = $this->obterConexao();
        $consultaProd = "SELECT * FROM Produto";
        $listaProduto = mysqli_query($conexao,$consultaProd);
        return $listaProduto;
    }
}

?>
