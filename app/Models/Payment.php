<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'order_id',
        'method',
        'amount', 'status', 'paid_at'
    ];


    public function order(): BelongsTo{
        return $this->belongsTo(Order::class);
    }
}
