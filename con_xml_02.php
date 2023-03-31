<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0">
<title>conexão</title>
</head>
<body>
<?php
// dados para conexão com base de dados MySql
$host = "localhost";
$user = "root";
$pass = "root";
$banco = "banco";
$porta = "3306";
// criando a linha de conexão
$conexao = mysqli_connect($host, $user, $pass, $banco, $porta)
or die ("Problemas com a conexão do Banco de Dados");
// enviando uma solicitação de consulta a tabela
$info = mysqli_query($conexao, "select * from contato");
if (!$info) {
die('Query Inválida: ' . mysqli_error($conexao));
}
//fechando a conexão
mysqli_close($conexao);
// criando o documento XML de forma manual
$xml = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$xml .= '<array>';
$xml .= '<telefone>';
//Retorna uma matriz que corresponde a
//linha obtida e move o ponteiro interno dos dados adiante.
while($dados=mysqli_fetch_array($info))
{
    // cria os elementos nós do XML com os dados
    $xml .= '<contato>';
    $xml .= '<apelido>'.$dados['apelido'].'</apelido>';
    $xml .= '<nome>'.$dados['nome'].'</nome>';
    $xml .= '<foneddd>'.$dados['foneddd'].'</foneddd>';
    $xml .= '</contato>';
    }
    //finaliza o documento
    $xml .= '</telefone>';
    $xml .= '</array>';
    //abrindo o arquivo
    $file = fopen('../xml/telefone.xml', 'w+');
    //escrevendo o conteúdo
    fwrite($file, $xml);
    //fechando o arquivo
    fclose($file);
    echo "Documento XML criado com sucesso !!!!";
    echo "<br>Execute: <b><a href='ler_con_xml_02.php'>ler_con_xml_02.php</a></b>";
    ?>
    </body>
    </html>
    