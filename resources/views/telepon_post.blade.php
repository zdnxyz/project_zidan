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
            <th>nomor_telepon</th>
            <th>pengguna_id</th>
        </tr>
        @foreach ($telepons as $data)
        <tr>
            <td> {{$data->id}} </td>
            <td> {{$data->nomor_telepon}} </td>
            <td> {{$data->pengguna_id}} </td>
        </tr>
        @endforeach
    </table> 
</body>
</html>