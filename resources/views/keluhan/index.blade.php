@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Keluhan</h1>
        <a href="{{ route('keluhan.create') }}" class="btn btn-primary">Tambah Keluhan</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keluhan as $klh)
                <tr>
                    <td>{{ $klh->id }}</td>
                    <td>{{ $klh->customer_id }}</td>
                    <td>{{ $klh->deskripsi }}</td>
                    <td>
                        <a href="{{ route('keluhan.show', $klh->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('keluhan.edit', $klh->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('keluhan.destroy', $klh->id) }}" method="POST" class="d-inline-block">
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
