@extends('layout.admin')

@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Brand</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Brand</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-start mb-4">
                        <a href="{{ route('adminbrand.create') }}" class="btn btn-primary">+ Tambah Brand</a>
                    </div>
                    @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                    @endif
                    @if (session('deleted'))
                            <div class="alert alert-success">
                                {{ session('deleted') }}
                            </div>
                    @endif
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Produk
                </div>
                <div class="card-body">
                    <table id="datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Brand</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Brand</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @forelse ($brands as $index => $brand)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>
                                    <a href="{{ route('adminbrand.edit', $brand->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('adminbrand.destroy', $brand->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">Belum ada data.</td>
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