<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'order_no', 'status', 'total_amount', 'shipping_address', 'billing_address'
    ];


    public function payments(): HasMany{
        return $this->hasMany(Payment::class);
    }



}
