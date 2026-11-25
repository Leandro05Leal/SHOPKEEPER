<?php

require_once "conexao.php";

$id = $_POST['id'];
$novoPreco = $_POST['preco'];
$novaQuantia = $_POST['quantidade'];

$sql = "UPDATE produtos
        SET preco = :preco,
            quantidade = :quantidade
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':preco' => $novoPreco,
    ':quantidade' => $novaQuantia,
    ':id' => $id
]);

echo "Produto atualizado com sucesso!";

echo "<br><br><a href='index.html'>Voltar ao menu</a>";

?>