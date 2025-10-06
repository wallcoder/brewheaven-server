<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'user_id', 'order_no', 'status', 'total_amount', 'shipping_address', 'billing_address'
    ];


    public function payments(): HasMany{
        return $this->hasMany(Payment::class);
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }



}
