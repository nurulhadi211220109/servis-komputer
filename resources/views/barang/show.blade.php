@extends('layouts.app')

@section('content')
    <h1>Detail Barang</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $brg->nama }}</h5>
            <p class="card-text">Stok: {{ $brg->stok }}</p>
            <a href="{{ route('barang.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
