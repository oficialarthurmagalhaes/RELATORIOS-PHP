<?php
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
    <title>Cadastro de Dados</title>
</head>
<body>
    <header>
        <nav class="navegacao-principal">
            <ul class="navegacao-principal-linhas">
                <li>
                    <a href="index.php" class="<?php echo ($paginaAtual == 'index.php') ? 'ativo' : ''; ?>">
                        Empresas
                    </a>
                </li>
                <li>
                    <a href="clientes.php" class="<?php echo ($paginaAtual == 'clientes.php') ? 'ativo' : ''; ?>">
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="funcionarios.php" class="<?php echo ($paginaAtual == 'funcionarios.php') ? 'ativo' : ''; ?>">
                        Funcionários
                    </a>
                </li>
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
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CNPJ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ECONEGE</td>
                            <td>14200412000170</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>