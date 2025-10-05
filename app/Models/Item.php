<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
   

    protected $fillable = [];

    public function category(): BelongsTo{
        return $this->belongsTo(Category::class);
    }

}
