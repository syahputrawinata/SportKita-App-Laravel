<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Transaksi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .receipt-container {
            width: 100%;
            max-width: 500px;
            margin: 20px auto;
            padding: 15px;
            border: 2px solid #000;
            border-radius: 5px;
        }
        .receipt-header {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .receipt-detail {
            margin-bottom: 10px;
        }
        .receipt-detail b {
            font-weight: bold;
        }
        .products-table {
            width: 100%;
            border-collapse: collapse;
        }
        .products-table th, .products-table td {
            padding: 5px;
            border-bottom: 1px solid #000;
        }
        .products-table th {
            text-align: left;
        }
        .total-price {
            margin-top: 10px;
            font-size: 16px;
            font-weight: bold;
            text-align: right;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #555;
        }
        .back-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background-color:rgb(105, 108, 111);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-btn:hover {
            background-color:rgb(57, 64, 71);
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="receipt-header">
            <h3>Struk Transaksi</h3>
            <p>Tanggal: {{ \Carbon\Carbon::now()->format('d M Y H:i') }}</p>
        </div>

        <div class="receipt-detail">
            <p><b>Penanggung Jawab:</b> {{ $transactions->user->username ?? 'Guest' }}</p>
            <p><b>Nama Pelanggan:</b> {{ $transactions->name_customer }}</p>
        </div>

        <table class="products-table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions->products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->pivot->quantity }}</td>
                    <td>Rp {{ number_format($product->pivot->price, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($product->pivot->quantity * $product->pivot->price, 0, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total-price">
            <p><b>Total Harga:</b> Rp {{ number_format($transactions->total_price, 0, ',', '.') }}</p>
        </div>

        <div class="footer">
            <p>Terima kasih atas transaksi Anda!</p>
        </div>

        
        <a href="{{ route('cashiertransaction.index') }}" class="back-btn">Kembali</a>
        <a href="{{ route('cashiertransaction.downloadStruk', $transactions['id']) }}" class="back-btn">Cetak (.pdf)</a>
    </div>
</body>
</html>
