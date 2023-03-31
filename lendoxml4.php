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
        $xml = '<?mxl version="1.0" encoding="ISO-8859-1"?>
                <array>
                    <materia>
                        <aula> 
                            <titulo> Aula 01 </titulo>
                            <texto> Usando XML com PHP </texto>
                        </aula>
                    </materia>
                </array>';

        $xml = simplexml_load_string($xml);

        echo $xml->materia->aula->titulo;
        echo "<br>";
        echo $xml->materia->aula->texto;
    ?>
        
</body>
</html>