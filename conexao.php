<?php
/*
ESSE ARQUIVO É RESPONSÁVEL POR REALIZAR A CONEXÃO
COM BANCO DE DADOS
*/

$nomeservidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancodedados = "agenda telefonica"; // Corrigido para o nome correto do banco

// CRIA A CONEXÃO:
$conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

// VERIFICA A CONEXÃO:
// if (!$conn) {
//     die("Conexão falhou: " . mysqli_connect_error());
// } else {
//     echo "Conectado com sucesso";
// }

// Configura para reportar todos os erros (MySQLi com erros mais detalhados)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function conectadb()
{
    $endereco = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "agenda telefonica"; // Nome corrigido

    try {
        // Criação da conexão orientada a objetos (OOP)
        $conn = new mysqli($endereco, $usuario, $senha, $banco);

        // Verifica se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
            throw new Exception("Falha na conexão: " . $conn->connect_error);
        }

        return $conn;
    } catch (Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
}
?>
