@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Edit Brand</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('adminbrand.update', ['id' => $brands->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Brand</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="name" 
                           name="name" 
                           value="{{old('name', $brands->name)}}"
                           placeholder="Masukkan nama brand" 
                           required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Edit Brand</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
