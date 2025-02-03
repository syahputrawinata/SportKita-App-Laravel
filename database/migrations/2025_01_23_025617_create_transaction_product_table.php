<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaction_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_id') // Relasi ke tabel transactions
                  ->constrained('transactions')
                  ->onDelete('cascade'); // Jika transaksi dihapus, data pivot ikut terhapus
            $table->foreignId('product_id') // Relasi ke tabel products
                  ->constrained('products')
                  ->onDelete('cascade'); // Jika produk dihapus, data pivot ikut terhapus
            $table->integer('quantity'); // Jumlah produk dalam transaksi
            $table->decimal('price', 20, 2); // Harga produk pada saat transaksi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_product');
    }
};
