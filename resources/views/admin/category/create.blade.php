@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Tambah Kategori</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('admincategory.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Kategori</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="name" 
                           name="name" 
                           placeholder="Masukkan nama brand" 
                           required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Tambah Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
