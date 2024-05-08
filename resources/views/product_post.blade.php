<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <tr>
            <th>id</th>
            <th>nama_product</th>
            <th>jumlah</th>
            <th>merk_id</th>
        </tr>
        @foreach ($products as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nama_product}} </td>
            <td> {{$data->jumlah}} </td>
            <td> {{$data->merk_id}} </td>
        </tr>
        @endforeach
    </table> 
</body>
</html>