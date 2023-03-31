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
    <h1>Lista de Matérias</h1>

    <?php 
        $link = "../xml/exemplo07.xml";
        $xml = simplexml_load_file($link) -> materia;
        foreach($xml -> aula as $aula){
            echo "<strong>Título:</strong> ".utf8_decode($aula -> titulo)."<br />";
            echo "<img src='".$aula -> imagem."'></img><br />";
            echo "<br />";
        }
    ?> 
</body>
    </center>
</html>