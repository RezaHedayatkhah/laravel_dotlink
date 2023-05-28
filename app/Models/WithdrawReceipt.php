<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WithdrawReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_id',
        'status',
        'amount',
        'withdraw_type',
        'card_number',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
