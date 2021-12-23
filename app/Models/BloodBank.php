<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'user_id', 'num_ab', 'num_a', 'num_b', 'num_o', 'enabled'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bankpockets()
    {
        return $this->hasMany(BankPocket::class);
    }

    public function mouvements()
    {
        return $this->hasMany(Mouvement::class);
    }
}
