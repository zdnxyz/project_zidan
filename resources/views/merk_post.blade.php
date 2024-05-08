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
            <th>nama_merk</th>
        </tr>
        @foreach ($merks as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nama_merk}} </td>
        </tr>
        @endforeach
    </table> 
</body>
</html>