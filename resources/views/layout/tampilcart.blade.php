<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>


    @yield('content')
    @foreach($tampil as $tampil)
    <tr>
                        <td>{{$tampil->produk_id}}</td>
                        <td>{{$tampil->nama_produk}}</td>
                        <td>Rp {{$tampil->harga}}</td>
                        <td>{{$tampil->stok}}</td>
    </tr>
    @endforeach
    
</body>
</html>