@extends('layout.admin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Product</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-start mb-4">
                        <a href="{{ route('adminproduct.create') }}" class="btn btn-primary">+ Tambah Produk</a>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('deleted'))
                        <div class="alert alert-success">{{ session('deleted') }}</div>
                    @endif
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i> Data Produk
                </div>
                <div class="card-body">
                    <table id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Brand</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Brand</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @forelse ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ Str::limit($product->description, 50) }}</td>
                                <td>Rp. {{ number_format($product->price, 0, ',', '.') }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->brand->name ?? 'Tidak Diketahui' }}</td>
                                <td>{{ $product->category->name ?? 'Tidak Diketahui' }}</td>
                                <td>
                                    <!-- Tombol untuk membuka modal -->
                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#productDetail{{ $product->id }}">
                                        Lihat
                                    </button>
                                    <a href="{{ route('adminproduct.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('adminproduct.destroy', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-2" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal Detail Produk -->
                            <div class="modal fade" id="productDetail{{ $product->id }}" tabindex="-1" aria-labelledby="productDetailLabel{{ $product->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="productDetailLabel{{ $product->id }}">{{ $product->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid mb-3" alt="{{ $product->name }}">
                                            <p><strong>Harga:</strong> Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                                            <p><strong>Stok:</strong> {{ $product->stock }}</p>
                                            <p><strong>Brand:</strong> {{ $product->brand->name ?? 'Tidak Diketahui' }}</p>
                                            <p><strong>Kategori:</strong> {{ $product->category->name ?? 'Tidak Diketahui' }}</p>
                                            <p><strong>Deskripsi:</strong> {{ $product->description }}</p>
                                            <p><strong>Rak:</strong> {{ $product->rack->name ?? 'Tidak Diketahui' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center">Belum ada data.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; SportKita 2025</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('#datatable').DataTable(); // Inisialisasi DataTable
    });
</script>
@endsection
