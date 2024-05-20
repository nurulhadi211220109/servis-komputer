@extends('layouts.app')

@section('content')
    <h1>Edit Keluhan</h1>

    <form action="{{ route('keluhan.update', $klh->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="customer_id">Customer ID</label>
            <input type="number" name="customer_id" id="customer_id" class="form-control" value="{{ $klh->customer_id }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $klh->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
