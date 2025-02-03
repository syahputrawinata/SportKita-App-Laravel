<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TransactionProduct extends Pivot
{
    protected $table = 'transaction_product'; // Nama tabel pivot
    
    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity',
        'price',
    ];
}
