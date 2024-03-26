<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Vendas Simplificado</title>
</head>
<body>
    <h1>Relatório de Vendas Simplificado</h1>
    @foreach($data['vendas'] as $index => $venda)
        <h2>Venda {{ $index + 1 }}</h2>
        <p>Data: {{ $venda['data'] }}</p>
        <p>ID Venda: {{ $venda['id_venda'] }}</p>
        <p>Valor Total: {{ $venda['valor_total'] }}</p>
        <p>ID Cliente: {{ $venda['id_cliente'] }}</p>
        <p>Nome Cliente: {{ $venda['nome_cliente'] }}</p>
        <p>Vendedor: {{ $venda['vendedor'] }}</p>
        <h3>Itens da Venda</h3>
        <ul>
            @foreach($venda['itens_vendas'] as $item)
                <li>
                    ID Item: {{ $item['id'] }},
                    Quantidade: {{ $item['quantidade'] }},
                    Valor Unitário: {{ $item['valor_unit'] }},
                    Descrição Produto: {{ $item['descricao_produto'] }},
                    ID Venda: {{ $item['id_venda'] }}
                </li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>