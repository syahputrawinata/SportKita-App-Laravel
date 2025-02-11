@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Edit Rak</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('adminrack.update', ['id' => $racks->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="code" class="form-label">Kode Rak</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="code" 
                           name="code" 
                           value="{{old('code', $racks->code)}}"
                           placeholder="Masukkan Kode Rak" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Rak</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="name" 
                           name="name" 
                           value="{{old('name', $racks->name)}}"
                           placeholder="Masukkan nama Rak" 
                           required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Edit Rak</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
