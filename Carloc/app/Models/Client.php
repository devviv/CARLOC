<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends User{

    protected $guarded = [];
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    public function abonnement()
    {
        return $this->hasMany(Abonnement::class);
    }
}
