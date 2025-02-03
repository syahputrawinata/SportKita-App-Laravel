<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_customer',
        'total_price',
    ];

    /**
     * Relasi ke model User (kasir).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke produk dalam transaksi (many-to-many).
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'transaction_product')
                    ->withPivot('quantity', 'price') // Menambahkan data quantity dan price
                    ->withTimestamps();
    }
}
