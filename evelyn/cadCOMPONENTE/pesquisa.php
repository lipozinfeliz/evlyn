<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de componentes</title>
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/botstrap.min.css">
</head>
<body>
    <div class="container">
        <p class="text-primary text-center"> CADASTRO DE COMPONENTES- PESQUISAS DOS DADOS</p>
        <?php
        require "conexao.php";
        $sql= "SELECT * FROM tbcomponentes ORDER BY curso";
        $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo"<table border='1' width='700' align='center'>";
        echo "<tr>";
        echo "<th>Códigos</th>";
        echo "<th>Curso</th>";
        echo "<th>Componentes</th>";
        echo "<th>Editar</th>";

while($linha=mysqli_fetch_array($resultado))
{
    $codigo  = $linha["codigo"];
    $curso  = $linha["curso"];
    $componente  = $linha["componente"];


        echo "<tr>";
        echo "<td>$codigo</td>";
        echo "<td>$curso</td>";
        echo "<td>$componente</td>";
        echo "</tr>";
       
}
        echo "<table>";
        ?>
</body>
</html>