<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionario</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="download.png" type="image/png">


</head>
<body>
<img src="logo.png" alt="logo do site" id="logo">
    
<header>
        <nav>
            <a href="home.html">Pagina Inicial</a>
            <details>
                <summary>
                    <a href="#">Lista</a>
                </summary>
                    <a href="listalivros.php">Livros</a><br>
                    <a href="listacliente.php">Clientes</a><br>
                    <a href="listaemprestimo.php">Emprestimos</a><BR>
                    <a href="listafuncionario.php">Funcionarios</a>
            </details>

            <details>
                <summary>
                    <a href="#">Cadastro</a>
                </summary>
                <a href="cadastro_livro.html">Cadastro do Livro</a><br>
                <a href="cadastro_cliente.html">Cadastro do Cliente</a><br>
                <a href="cadastro_emprestimo.php">Cadastro do Emprestimo</a><br>
                <a href="cadastro_funcionario.html">Cadastro do Funcionario</a>

            </details>
        </nav>
    </header>
<h2>Lista de Funcionarios</h2>
<table>


<table>
    <thead>

        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>CPF</th>
            <th>TELEFONE</th>
            <th>DATA DE NASCIMENTO</th>
            <th>FUNÇÃO</th>
        </tr>
    </thead>
    <?php
        require_once "conexao.php";

        $sql = "SELECT * FROM funcionario";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idfuncionario'];
            $nome = $linha['nome'];
            $cpf = $linha['cpf'];
            $telefone = $linha['telefone'];
            $data_de_nascimento = $linha['data_de_nascimento'];
            $funcao = $linha['funcao'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$nome</td>";
            echo "<td>$cpf</td>";
            echo "<td>$telefone</td>";
            echo "<td>$data_de_nascimento</td>";
            echo "<td>$funcao</td>";
            echo "</tr>";
        }
    ?>
</table>
</body>
</html>
</table>

