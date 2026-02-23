<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Added role field for checking roles
        // other necessary fields
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relationships
    public function products() {
        return $this->hasMany(Product::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function notifications() {
        return $this->hasMany(Notification::class);
    }

    public function refunds() {
        return $this->hasMany(Refund::class);
    }

    // Role checking methods
    public function isAdmin() {
        return $this->role === 'admin';
    }

    public function isSeller() {
        return $this->role === 'seller';
    }

    public function isBuyer() {
        return $this->role === 'buyer';
    }

    // Scopes for filtering
    public function scopeActive($query) {
        return $query->where('active', 1);
    }

    public function scopeSellers($query) {
        return $query->where('role', 'seller');
    }

    public function scopeBuyers($query) {
        return $query->where('role', 'buyer');
    }
}