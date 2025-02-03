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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') // Relasi dengan tabel users untuk kasir
                  ->constrained('users') // Pastikan ada tabel users dengan kolom id
                  ->onDelete('cascade'); // Jika kasir dihapus, transaksi ikut terhapus
            $table->string('name_customer'); // Nama pelanggan
            $table->decimal('total_price', 20, 2); // Total harga transaksi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
