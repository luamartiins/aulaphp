<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
        $host = 'localhost';
        $db = 'senai_aulaphp_lua';
        $user = 'luana';
        $pass = 'Luana1112';
        $port = 3307; // Porta MySQL correta
        // Inclui o arquivo da classe Database que criamos para conectar dentro da pasta php
        require_once 'connection.php';
        // Cria uma instância da classe Database
        $database = new Database($host, $db, $user, $pass, $port);
        // Chama o método connect para estabelecer a conexão
        $database->connect();
        // Obtém a instância PDO para realizar consultas
        $pdo = $database->getConnection();
        if ($pdo) {
            try {
                // Prepara uma consulta SQL para selecionar as colunas 'id' e 'nome' da tabela 'usuario'
                $stmt = $pdo->prepare("SELECT id, nome FROM usuario");
                
                // Executa a consulta preparada
                $stmt->execute();
            } catch (PODException $e) {
                echo "Erro ao consultar o banco de dados: " . $e->getMessage() . "<br>";
            }
            }
