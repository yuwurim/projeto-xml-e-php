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
header('Content-Type: text/html; charset=UTF-8');
// dados para conexão com base de dados MySql
$host = "localhost";
$user = "root";
$pass = "root";
$banco = "banco";
// criando a linha de conexão
$conexao = mysqli_connect($host, $user, $pass, $banco)
or die ("Problemas com a conexão do Banco de Dados");
// enviando uma solicitação de consulta a tabela
$info = mysqli_query($conexao, "select * from contato ");
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
//fazendo a leitura do documento
$xml = simplexml_load_string($xml);
foreach($xml -> telefone ->contato as $contato){
echo "<strong>Apelido:</strong> ".utf8_decode($contato -> apelido)."<br />";
echo "<strong>Nome Completo:</strong> ".utf8_decode($contato -> nome)."<br />";
echo "<strong>(ddd) Telefone:</strong> ".utf8_decode($contato -> foneddd)."<br />";
echo "<br />";
}
?>
</body>
</html>
