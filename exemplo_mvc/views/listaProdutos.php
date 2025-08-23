<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <a href="index.php?controle=produtoController&metodo=inserir">Novo Produto</a>
    <table border="1">
        <tr>
            <th>produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($resultado as $dados)
            {
                $preco = number_format($dados->preco,2,",",".");
                echo "<tr> 
                        <td>{$dados->nome}</td>
                        <td>$preco</td>
                        <td>{$dados->estoque}</td>
                        <td><a href='index.php?controle=produtoController&metodo=alterar&id={$dados->id_produto}'>Alterar</a>&nbsp;&nbsp;
                        <a href='index.php?controle=produtoController&metodo=excluir&id={$dados->id_produto}'>Excluir</a></td>
                     </tr>";
            }
        ?>
    </table>
</body>
</html>