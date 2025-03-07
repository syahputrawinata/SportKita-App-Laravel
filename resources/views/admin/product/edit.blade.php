@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Edit Produk</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('adminproduct.update', ['id' => $products->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="name" 
                           name="name" 
                           value="{{old('name', $products->name)}}"
                           placeholder="Masukkan nama produk" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control form-control-sm" 
                              id="description" 
                              name="description" 
                              value="{{old('description', $products->description)}}"
                              rows="3" 
                              placeholder="Masukkan deskripsi produk"></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="number" 
                           class="form-control form-control-sm" 
                           id="price" 
                           name="price" 
                           value="{{old('price', $products->price)}}"
                           placeholder="Masukkan harga produk" 
                           required>
                </div>

                 <div class="mb-3">
                    <label for="stock" class="form-label">Stok Produk</label>
                    <input type="number" 
                           class="form-control form-control-sm" 
                           id="stock" 
                           name="stock" 
                           value="{{old('stock', $products->stock)}}"
                           placeholder="Masukkan jumlah stok produk" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand Produk</label>
                    <select class="form-select form-select-sm" id="brand" name="brand_id" required>
                    <option selected disabled>Pilih brand</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $brand->id == $products->brand_id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori Produk</label>
                    <select class="form-select form-select-sm" id="category" name="category_id" required>
                        <option selected disabled>Pilih kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="rack" class="form-label">Rak</label>
                    <select class="form-select form-select-sm" id="rack" name="rack_id" required>
                        <option selected disabled>Pilih Rak</option>
                        @foreach($racks as $rack)
                            <option value="{{ $rack->id }}" {{ $rack->id == $products->rack_id ? 'selected' : '' }}>
                            {{ $rack->code }} ({{ $rack->name }})
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Edit Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
