<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelamento extends Model
{
    use HasFactory;

    protected $table = 'parcelamento';

    protected $fillable = [
        'valor',
        'parcela',
        'fk_pedido'
    ];
}
