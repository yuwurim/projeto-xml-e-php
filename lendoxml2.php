<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista das Aulas</h1>
    <?php
        $link = "../xml/exemplo05.xml";
        $xml = simplexml_load_file($link) -> materia;
        foreach($xml -> aula as $aula){
            echo "<strong>Título:</strong> ".utf8_decode($aula -> titulo)."<br />";
            echo "<strong>Texto:</strong> ".utf8_decode($aula -> texto)."<br />";
            echo "<br />";
        }
        foreach($xml -> nota as $nota){
            echo "<strong>Avaliação:</strong> ".utf8_decode($nota -> avaliacao)."<br />";
            echo "<strong>Peso:</strong> ".utf8_decode($nota -> peso)."<br />";
            echo "<br />";
        }
    ?>
</body>
</html>