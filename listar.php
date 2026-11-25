<?php

require_once "conexao.php";

$sql = "SELECT * FROM produtos";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Produtos | ShopKeeper</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <h1>ShopKeeper</h1>
    <p>Produtos cadastrados</p>
</header>

<main>

    <h2>Lista de produtos</h2>

    <a href="index.html" class="btn btn-voltar">
        Voltar ao menu
    </a>

    <br><br>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Quantidade</th>
        </tr>

        <?php foreach ($produtos as $produto) { ?>

        <tr>
            <td><?= $produto['id'] ?></td>
            <td><?= htmlspecialchars($produto['nome']) ?></td>
            <td><?= htmlspecialchars($produto['descricao']) ?></td>
            <td>R$ <?= $produto['preco'] ?></td>
            <td><?= $produto['quantidade'] ?></td>
        </tr>

        <?php } ?>

    </table>

</main>

</body>
</html>