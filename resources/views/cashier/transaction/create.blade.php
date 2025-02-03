<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3e5f5; /* Latar belakang ungu pastel */
        }
        .form-container {
            max-width: 700px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .form-header {
            background-color: #673ab7; /* Warna ungu gelap */
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .btn-primary {
            background-color: #7e57c2;
            border-color: #7e57c2;
        }
        .btn-primary:hover {
            background-color: #5e35b1;
            border-color: #5e35b1;
        }
        .btn-add {
            background-color: #ba68c8;
            border-color: #ba68c8;
            color: white;
        }
        .btn-add:hover {
            background-color: #ab47bc;
            border-color: #ab47bc;
        }
        .btn-remove {
            background-color: #e57373;
            border-color: #e57373;
            color: white;
        }
        .btn-remove:hover {
            background-color: #ef5350;
            border-color: #ef5350;
        }
        .card-footer {
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <h2>Form Transaksi</h2>
        </div>
        <form action="{{route('cashiertransaction.store')}}" method="POST">
            <!-- CSRF Token -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- Nama Kasir yang Menangani -->
            @if(Auth::check())
                <p class="mb-4" style="font-size: 18px; color: #333; font-weight: 600;">
                    Penanggung Jawab: <b>{{ Auth::user()->username }}</b>
                </p>
            @else
                <p class="mb-4" style="font-size: 18px; color: #333; font-weight: 600;">
                    Penanggung Jawab: <b>Guest</b>
                </p>
            @endif

            @if (Session::get('failed'))
                <div class="alert alert-danger">{{Session::get('failed') }}</div>
            @endif

            <!-- Nama Pelanggan -->
            <div class="mb-3">
                <label for="user" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control" name="name_customer" required>
            </div>

            <div id="product-container">
                <div class="product-group mb-3">
                    <label for="product" class="form-label">Produk</label>
                    <select class="form-select" name="products[0][id]" required>
                        <option value="" disabled selected>Pilih produk</option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}</option>
                        @endforeach
                    </select>

                    <label for="qty" class="form-label mt-2">Jumlah</label>
                    <input type="number" class="form-control" name="products[0][quantity]" min="1" required>

                    <button type="button" class="btn btn-remove mt-2" onclick="removeProduct(this)">Hapus Produk</button>
                </div>
            </div>

            <button type="button" class="btn btn-add mb-3" id="add-product">Tambah Produk</button>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Simpan Transaksi</button>
            </div>
        </form>
    </div>

    <script>
        let productIndex = 1;
        document.getElementById('add-product').addEventListener('click', function () {
            const container = document.getElementById('product-container');
            const productGroup = document.createElement('div');
            productGroup.classList.add('product-group', 'mb-3');
            productGroup.innerHTML = `
                <label for="product" class="form-label">Produk</label>
                <select class="form-select" name="products[${productIndex}][id]" required>
                    <option value="" disabled selected>Pilih produk</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }} - Rp {{ number_format($product->price, 0, ',', '.') }}</option>
                    @endforeach
                </select>

                <label for="qty" class="form-label mt-2">Jumlah</label>
                <input type="number" class="form-control" name="products[${productIndex}][quantity]" min="1" required>

                <button type="button" class="btn btn-remove mt-2" onclick="removeProduct(this)">Hapus Produk</button>
            `;
            container.appendChild(productGroup);
            productIndex++;
        });

        function removeProduct(button) {
            button.parentElement.remove();
        }
    </script>
</body>
</html>
