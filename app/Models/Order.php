<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable(['user_id', 'item_id', 'status', 'total_amount'])]
class Order extends Model
{
      use SoftDeletes;
      public function user()
      {
            return $this->belongsTo(User::class);
      }
      public function item()
      {
            return $this->belongsTo(Item::class);
      }
      protected $casts = [
            'total_amount' => 'decimal:2'
      ];
}
