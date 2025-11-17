<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'teste_relatorios_php';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);

// Verifica a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

// Define o charset para UTF-8 (evita problemas com acentuação)
$conexao->set_charset("utf8");
?>