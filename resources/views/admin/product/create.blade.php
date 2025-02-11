@extends('layout.admin')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">Tambah Produk</h2>
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{route('adminproduct.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Produk</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="name" 
                           name="name" 
                           placeholder="Masukkan nama produk" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control form-control-sm" 
                              id="description" 
                              name="description" 
                              rows="3" 
                              placeholder="Masukkan deskripsi produk"></textarea>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Harga Produk</label>
                    <input type="text" 
                           class="form-control form-control-sm" 
                           id="price" 
                           name="price" 
                           placeholder="Masukkan harga produk" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="file" 
                    class="form-control" 
                    name="image" accept="image/*" 
                    required>
                </div>

                 <div class="mb-3">
                    <label for="stock" class="form-label">Stok Produk</label>
                    <input type="number" 
                           class="form-control form-control-sm" 
                           id="stock" 
                           name="stock" 
                           placeholder="Masukkan jumlah stok produk" 
                           required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Brand Produk</label>
                    <select class="form-select form-select-sm" id="brand" name="brand_id" required>
                        <option selected disabled>Pilih brand</option>
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Kategori Produk</label>
                    <select class="form-select form-select-sm" id="category" name="category_id" required>
                        <option selected disabled>Pilih kategori</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="rack" class="form-label">Rak</label>
                    <select class="form-select form-select-sm" id="rack" name="rack_id" required>
                        <option selected disabled>Pilih Rak</option>
                        @foreach($racks as $rack)
                            <option value="{{ $rack->id }}">{{ $rack->code }} ({{ $rack->name }})</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-sm">Tambah Produk</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const priceInput = document.getElementById("price");

        priceInput.addEventListener("input", function() {
            let value = this.value.replace(/\D/g, ""); // Hapus semua karakter non-digit
            value = new Intl.NumberFormat("id-ID").format(value); // Format ke Rupiah dengan titik pemisah
            this.value = value;
        });

        priceInput.addEventListener("blur", function() {
            this.value = this.value ? "Rp " + this.value : "";
        });

        priceInput.addEventListener("focus", function() {
            this.value = this.value.replace("Rp ", "");
        });
    });
</script>