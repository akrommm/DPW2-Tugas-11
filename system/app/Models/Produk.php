<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

class Produk extends Model
{

    use ProdukRelations, ProdukAttributes;

    protected $table = 'produk';

    protected $casts = [
        'created_at' => 'datetime',
        'berat' => 'decimal:2'
    ];
}
