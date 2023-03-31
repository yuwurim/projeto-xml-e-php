<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h1>Tabela de Produtos</h1>

    <?php
        $link = "../xml/exemplo04.xml";
        $xml = simplexml_load_file($link) -> materia; 
        
        print_r($xml);
    ?>
</body>
</center>
</html>