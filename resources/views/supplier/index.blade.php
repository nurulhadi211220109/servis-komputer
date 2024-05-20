@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Supplier</h1>
        <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah Supplier</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supplier as $spl)
                <tr>
                    <td>{{ $spl->id }}</td>
                    <td>{{ $spl->nama }}</td>
                    <td>{{ $spl->kontak }}</td>
                    <td>
                        <a href="{{ route('supplier.show', $spl->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('supplier.edit', $spl->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('supplier.destroy', $spl->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
