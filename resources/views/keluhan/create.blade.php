@extends('layouts.app')

@section('content')
    <h1>Tambah Keluhan</h1>

    <form action="{{ route('keluhan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="customer_id">Customer ID</label>
            <input type="number" name="customer_id" id="customer_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
