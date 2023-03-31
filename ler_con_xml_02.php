<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Lista de contatos </h1>
    <?php 
    $link = "../xml/telefone.xml";
    $xml = simplexml_load_file($link) -> telefone;
        foreach($xml -> contato as $contato){
                echo "<strong>Apelido:</strong> ".utf8_decode($contato -> apelido)."<br />";
                echo "<strong>Completo:</strong> ".utf8_decode($contato -> nome)."<br />";
                echo "<strong>Telefone:</strong> ".utf8_decode($contato -> foneddd)."<br />";
                echo "<br />";
        }        
    ?>
</body>
</html>