<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function abonnements()
    {
        return $this->hasMany(Abonnement::class);
    }
    public function panier()
    {
        return $this->hasOne(Panier::class);
    }
}
