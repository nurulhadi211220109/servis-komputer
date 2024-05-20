@extends('layouts.app')

@section('content')
    <h1>Detail Customer</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $customer->nama }}</h5>
            <p class="card-text">Alamat: {{ $customer->alamat }}</p>
            <p class="card-text">Jenis Kelamin: {{ $customer->jenis_kelamin }}</p>
            <a href="{{ route('customers.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
