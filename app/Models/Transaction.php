<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    private $table = 'transactions';
    public $fillable = [
        'route_id',
        'total_amount'
    ];
    public $timestamps = true;
}
