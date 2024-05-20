@extends('layouts.app')

@section('content')
    <h1>Detail Keluhan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Customer ID: {{ $klh->customer_id }}</h5>
            <p class="card-text">Deskripsi: {{ $klh->deskripsi }}</p>
            <a href="{{ route('keluhan.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
