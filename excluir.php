<?php

require_once "conexao.php";

$id = $_POST['id'];

$sql = "DELETE FROM produtos
        WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    ':id' => $id
]);

echo "Produto excluído com sucesso!";

echo "<br><br><a href='index.html'>Voltar ao menu</a>";

?>