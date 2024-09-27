
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Componentes - php comSQ MyL</title>
</head>
<body>
    <div class="container">
        <h4 class="text-primary text-center">Cadastro de componentes - Pesquisa de dados</h4>
        <?php 
        require "conexao.php";
        $sql="SELECT * FROM  tbdisciplina ORDER BY iddisciplina";
        $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
            echo "<table border='1' width='700' align='center'>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "<th>Disciplina</th>";
        echo "<th>Descricao</th>";
        echo "<th>Editar</th>";
        echo "<tr>";

        //Realizando busca dos dados na tabela de componentes
        while($linha=mysqli_fetch_array($resultado))
        {
            $nome        =   $linha["nome"];
            $iddisciplina         =   $linha["iddisciplina"];
            $descricao    =   $linha["descricao"];

            //exibindo dados
            echo "<tr>";
                echo "<td>$nome</td>";
                echo "<td>$iddisciplina</td>";
                echo "<td>$descricao</td>";
            echo "</tr>";


        }
        echo"</table>";
        ?>
</div>
</body>
</html>
