<?php

echo "olá mundo";

//var_dump(json_decode($data));
?>
<table border="1">
    <tr>
        <th>Item</th>
        <th>ID</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Total</th>
    </tr>
    @foreach($data as $key=> $value)
    <tr>
        <td>{{ $key +1 }}</td>
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['created_at'] }}</td>
        <td>{{ $value['updated_at'] }}</td>
        <td>{{ $value['total'] }}</td>
    </tr>
    @endforeach
</table>