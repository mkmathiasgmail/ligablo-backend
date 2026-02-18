<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $table = 'refunds';

    protected $fillable = [
        'order_id',
        'amount',
        'status',
        'created_at',
        'updated_at',
    ];

    const STATUS_PENDING = 'pending';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}