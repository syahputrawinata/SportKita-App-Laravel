@extends('layout.template')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Product</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('user.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Transaksi</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-start mb-4">
                        <a href="{{ route('usertransaction.create') }}" class="btn btn-primary">+ Pembelian Baru</a>
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
                {{-- @dd($transactions[0]->products); --}}
                <div class="card-body">
                <table id="transactionTable" class="table table-striped table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pembeli</th>
                            <th>Produk</th>
                            <th>Total Harga</th>
                            <th>Nama Kasir</th>
                            <th>Tanggal Pembelian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($transactions as $item)
                            <tr>
                                <td class="text-center">{{ $no++ }}</td>
                                <td>{{ $item['name_customer'] }}</td>
                                <td>
                                    @foreach ($item['products'] as $product)
                                    <ol>
                                        <li>
                                            {{ $product['name'] }} ( {{ number_format($product['price'], 0, ',', '.') }} ) : Rp. {{ number_format
                                            ($product['price'], 0, ',', '.') }} <small>qty {{ $product->pivot->quantity }}</small>
                                        </li>
                                    </ol>
                                    @endforeach
                                </td>
                                <td>Rp. {{ number_format($item['total_price'],0, ',', '.') }}</td>
                                <td>{{ $item['user']['username'] }}</td>
                                <td>{{ \Carbon\Carbon::parse($item['created_at'])->translatedFormat('j F Y') }}</td>
                                <td>
                                    <a href="{{ route('usertransaction.downloadStruk', $item['id']) }}" class="btn btn-secondary">Download Setruk</a>
                                </td>
                            </tr>
                        @endforeach
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
        $('#transactionTable').DataTable(); // Selector sesuai dengan ID tabel
    });
</script>
@endsection