<?php

namespace App\Models;

use Illuminate\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use MustVerifyEmail, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'wallet_balance',
        'id_code',
        'phone_number',
        'card_number',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function urls(): HasMany
    {
        return $this->hasMany(Url::class);
    }

    public function withdraw_receipts(): HasMany
    {
        return $this->hasMany(WithdrawReceipt::class);
    }
}
