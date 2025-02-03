<?php

namespace App\Exports;

use App\Models\Transaction;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;

class TransactionsExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * Mengambil data transaksi yang akan diekspor
     */
    public function collection()
    {
        return Transaction::with(['user', 'products'])->orderBy('created_at', 'DESC')->get();
    }

    /**
     * Menentukan heading untuk file Excel
     */
    public function headings(): array
    {
        return [
            'ID Pembelian',
            'Nama Kasir',
            'Daftar Produk',
            'Nama Pembeli',
            'Total Harga',
            'Tanggal Pembelian',
        ];
    }

    /**
     * Memetakan data transaksi agar sesuai dengan format yang diinginkan
     */
    public function map($transaction): array
    {
        $formatwadah = '';

        foreach ($transaction->products as $key => $product) {
            $format = ($key + 1) . ". " . $product->name . " (" . $product->pivot->qty . 
                      " pcs : Rp. " . number_format($product->pivot->price, 0, ',', '.') . ")";
            $formatwadah .= ($key > 0 ? "\n" : "") . $format; // Menambahkan newline jika lebih dari 1 produk
        }

        return [
            $transaction->id,
            $transaction->user->username ?? 'Tidak Ada Kasir',
            $formatwadah,
            $transaction->name_customer ?? 'Tidak Diketahui',
            "Rp. " . number_format($transaction->total_price, 0, ',', '.'),
            Carbon::parse($transaction->created_at)->isoFormat('D MMMM YYYY'),
        ];
    }
}
