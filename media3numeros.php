<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média dos Alunos</title>
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/botstrap.min.css">
</head>
<body>
    <?php
    echo "< align='center'>Média dos Alunos</h3>";
    echo "<hr size='3'color='blue'>";

    $numero1 = $POST["numero1"];
    $numero2 = $POST["numero2"];
    $numero3 = $POST["numero3"];

    echo "<h3> Média Números </h3>"
        echo "Número 1: " .$numero1;
        echo "<br>Número 1: " .$numero2;
        echo "<br>Número 1: " .$numero3;

    ?>

</body>
</html>