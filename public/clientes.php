<?php
    require_once('conexao.php');
    $sql = "SELECT * FROM view_cliente_empresa";
    $resultado = $conexao->query($sql);
    
    // Pega o nome do arquivo da página atual (ex: "index.php", "clientes.php")
    $paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Clientes</title>
</head>
<body>
    <header>
        <nav class="navegacao-principal">
            <ul class="navegacao-principal-linhas">
                <li><a href="index.php">Empresas</a></li>
                <li><a href="clientes.php" class="ativo">Clientes</a></li>
                <li><a href="funcionarios.php">Funcionários</a></li>
            </ul>
        </nav>
        
        <a href="/logout" class="botao-sair"><img src="images/logout_icone.png" alt="Botão de Logout"></a>
    </header>

    <main>
        <div class="container-principal">
            <div class="barra-ferramentas">
                <form class="busca">
                    <input type="search" class="busca-texto" placeholder="Buscar empresa...">
                    <button type="submit" class="botao-pesquisar">
                        <img src="images/procurar_icone_preto.png" alt="">
                    </button>
                </form>

                <a href="/empresas/nova" class="botao-nova">
                    <img src="images/empresa_icone.png" alt="">
                    <span>Nova</span>
                </a>
            </div>

            <div class="container-tabela">
                <table class="tabela-registros">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Cliente desde</th>
                            <th>Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if($resultado->num_rows > 0){
                        while($row = $resultado->fetch_assoc()){
                            echo "<tr>";
                                echo "<td>".htmlspecialchars($row["Cliente"])."</td>";
                                echo "<td>".htmlspecialchars($row["CPF"])."</td>";
                                echo "<td>".htmlspecialchars($row["inicio_relacao"])."</td>";
                                echo "<td>".htmlspecialchars($row["Empresa"])."</td>";
                            echo "<tr>";
                        }
                    } else{
                        echo "<tr>
                                <td colspan='3'>Nenhum usuário encontrado</td>
                             </tr>";
                    }
                    $conexao->close();
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>