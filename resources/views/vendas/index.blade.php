<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Vendas</title>
</head>
<body>
    <h1>Relatório de Vendas</h1>
    <table border="1">
        <tr>
            <th>Data</th>
            <th>ID Venda</th>
            <th>Valor Total</th>
            <th>ID Cliente</th>
            <th>Nome Cliente</th>
            <th>Vendedor</th>
        </tr>
        @foreach($data['vendas'] as $venda)
            <tr>
                <td>{{ $venda['data'] }}</td>
                <td>{{ $venda['id_venda'] }}</td>
                <td>{{ $venda['valor_total'] }}</td>
                <td>{{ $venda['id_cliente'] }}</td>
                <td>{{ $venda['nome_cliente'] }}</td>
                <td>{{ $venda['vendedor'] }}</td>
            </tr>
            <tr>
                <td colspan="6">
                    <table border="1">
                        <tr>
                            <th>ID Item</th>
                            <th>Quantidade</th>
                            <th>Valor Unitário</th>
                            <th>Descrição Produto</th>
                            <th>ID Venda</th>
                        </tr>
                        @foreach($venda['itens_vendas'] as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['quantidade'] }}</td>
                                <td>{{ $item['valor_unit'] }}</td>
                                <td>{{ $item['descricao_produto'] }}</td>
                                <td>{{ $item['id_venda'] }}</td>
                            </tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>