<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $transactions = Transaction::with(['products', 'user'])->get();
        return view('user.transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $products = Product::all();
        return view('user.transaction.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name_customer' => 'required|string|max:255',
            'products' => 'required|array',
            'products.*.id' => 'required|exists:products,id',
            'products.*.quantity' => 'required|integer|min:1',
        ]);

        // Mendapatkan user yang sedang login
        $userId = auth()->id();  // Mendapatkan ID pengguna yang sedang login

        // Membuat transaksi baru
        $transactions = Transaction::create([
            'user_id' => $userId,  // Menggunakan user_id dari session login
            'name_customer' => $request->name_customer,
            'total_price' => 0,  // Harga total akan dihitung berdasarkan produk yang dibeli
        ]);

        $totalPrice = 0;

        // Menambahkan produk ke transaksi dan menghitung total harga
        foreach ($request->products as $productData) {
            $product = Product::find($productData['id']);
            $totalPrice += $product->price * $productData['quantity'];

            // Update stok produk setelah dibeli
            $product->decrement('stock', $productData['quantity']);

            // Menambahkan produk ke transaksi dengan quantity dan harga
            $transactions->products()->attach($product, [
                'quantity' => $productData['quantity'],
                'price' => $product->price,
            ]);
        }

        // Memperbarui total harga transaksi dengan harga yang sudah dihitung
        $transactions->update(['total_price' => $totalPrice]);

        // Redirect ke halaman transaksi dengan pesan sukses
        if($transactions) {
            return redirect()->route('usertransaction.showStruk', ['id' => $transactions->id])
            ->with('success', 'Transaksi berhasil dibuat.');
        }else {
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian. Silahkan coba kembali dengan data yang benar');
        }
    }


    /**
     * Display the specified resource.
     */
    public function showStruk(string $id)
    {
        //
        $transactions = Transaction::with(['products', 'user'])->findOrFail($id);

        return view('user.transaction.struk', compact('transactions'));
    }


    public function downloadStruk($id) 
    {
        //Ambil data berdasarkan id yang ada di struk dan dipartikan terformat array
        $transactions = Transaction::with(['products', 'user'])->findOrFail($id)->toArray();
        //kita akan share data dengan inisial awal agar bisa digunakan ke blade manapun
        view()->share('transactions', $transactions);
        //ini akan meload view halaman downlaodnya
        $pdf = PDF::loadView('user.transaction.Download-pdf', $transactions);
        //kita tinggal download
        return $pdf->download('Invoice.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
