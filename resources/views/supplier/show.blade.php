@extends('layouts.app')

@section('content')
    <h1>Detail Supplier</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $spl->nama }}</h5>
            <p class="card-text">Kontak: {{ $spl->kontak }}</p>
            <a href="{{ route('supplier.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
