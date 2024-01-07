@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Daftar Tamu</h1><br>
    <a href="{{ route('tamu.index') }}" class="btn btn-primary">Home</a>
    <a href="{{ route('tamu.create') }}" class="btn btn-primary">Tambahkan Tamu</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat<th>
                <th>Nomor Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tamus as $tamu)
                <tr>
                    <td>{{ $tamu ->id }}</td>
                    <td>{{ $tamu ->nama }}</td>
                    <td>{{ $tamu ->alamat }}</td>
                    <td>{{ $tamu ->nomor_telepon }}</td>
                    <td>
                        <a href="{{ route('tamu.edit', $tamu->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('tamu.destroy', $tamu->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection