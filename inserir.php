
<?php

require_once "conexao.php";

try {

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO produtos (nome, descricao, preco, quantidade)
            VALUES (:nome, :descricao, :preco, :quantidade)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome' => $nome,
        ':descricao' => $descricao,
        ':preco' => $preco,
        ':quantidade' => $quantidade
    ]);

    echo '<p class="mensagem sucesso">✓ Produto cadastrado com sucesso!</p>';

} catch (PDOException $e) {

    http_response_code(500);
    echo '<p class="mensagem erro">Erro ao cadastrar produto.</p>';

}

?>
