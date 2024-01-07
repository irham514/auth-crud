<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1>Daftar Tamu</h1>
    
        <form action="{{ route('tamu.store') }}" method="POST">
        {{ csrf_field() }}
        Nama: <input type="text" name="nama" required><br>
        Alamat: <input type="text" name="alamat" required><br>
        No. Telepon: <input type="text" name="nomor_telepon" required>
        <input type="submit" value="submit">
        </form>
    </div>    
</body>
</html>