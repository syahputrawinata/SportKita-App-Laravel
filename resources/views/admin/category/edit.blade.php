@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Edit Kategori</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admincategory.update', ['id' => $categories->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="name" 
                           name="name" 
                           value="{{old('name', $categories->name)}}"
                           placeholder="Masukkan nama brand" 
                           required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Edit Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
