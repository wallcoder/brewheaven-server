<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{


    protected $fillable = ['category_id', 'name', 'image', 'price', 'description'];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function orders(): BelongsToMany{
        return $this->belongsToMany(Order::class, 'order_item')->withPivot('quantity');
    }

    public function orderItems(): HasMany{
        return $this->hasMany(OrderItem::class);
    }

    public function parent(): BelongsTo{
        return $this->belongsTo(Item::class);
    }

    public function children(): HasMany{
        return $this->hasMany(Item::class);
    }

}
