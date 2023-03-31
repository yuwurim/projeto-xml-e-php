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
        $link = "../xml/exemplo06.xml";
        $xml = simplexml_load_file($link) -> materia;
        foreach($xml -> aula as $aula){
            echo "<strong>Título:</strong> ".utf8_decode($aula -> titulo)."<br />";
            echo "<strong>Texto:</strong> ".utf8_decode($aula -> texto)."<br />";
            foreach($xml -> nota as $nota){
                echo "<strong>Item:</strong> ".utf8_decode($topico -> item01)."<br />";
                echo "<strong>Item:</strong> ".utf8_decode($topico -> item02)."<br />";
            }
            echo "<br />";
        }
    ?>
</body>
</html>