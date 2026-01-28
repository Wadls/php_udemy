<?php
// Define o título da página
$titulo = "Meu Primeiro Script de Diagnóstico";

echo "<h1>$titulo</h1>";
echo "<hr>";

// Capturando dados que vimos no seu phpinfo()
$ip_usuario = $_SERVER['REMOTE_ADDR']; // O IP de quem acessa
$navegador = $_SERVER['HTTP_USER_AGENT']; // O navegador utilizado
$pasta_raiz = $_SERVER['DOCUMENT_ROOT']; // Onde seus arquivos moram
$metodo = $_SERVER['REQUEST_METHOD']; // Se a requisição foi GET ou POST

echo "<ul>";
    echo "<li><strong>Meu IP:</strong> $ip_usuario</li>";
    echo "<li><strong>Meu Navegador:</strong> $navegador</li>";
    echo "<li><strong>Pasta Principal do Servidor:</strong> $pasta_raiz</li>";
    echo "<li><strong>Método de Acesso:</strong> $metodo</li>";
echo "</ul>";

// Uma pequena lógica condicional para treinar
if (strpos($navegador, 'Chrome') !== false) {
    echo "<p style='color: blue;'>Você está usando o Google Chrome (ou um navegador baseado nele)!</p>";
} else {
    echo "<p style='color: green;'>Você está usando um navegador diferente do Chrome.</p>";
}
?>