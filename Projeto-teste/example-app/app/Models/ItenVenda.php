<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItenVenda extends Model
{
    use HasFactory;

    protected $table = 'itensvenda';

    protected $fillable = [
        'qtd',
        'fk_pedido',
        'fk_produto'
    ];
}
