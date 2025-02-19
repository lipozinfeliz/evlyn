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
    echo "<align='center'><h3>Média dos Alunos</h3>";
    echo "<hr size='3'color='blue'>";

    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
   

    echo "<h3> Média Números </h3>";
        echo "Número 1: " . $numero1;
        echo "<br>Número 2: " . $numero2;
        echo "<br>Número 3: " . $numero3;
     

    $soma = ($numero1 + $numero2 + $numero3)/3;

    echo "<br>Média dos alunos: ". $soma
     
        
        



    ?>

</body>
</html>