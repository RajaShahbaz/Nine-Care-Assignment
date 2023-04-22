<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable , HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'addres',
        'phone',
        'age',
        'location',
        'gender',
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
    ];
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
 // Query scopes
 public function scopeAge($query, $age)
 {
     return $query->where('age', $age);
 }

 public function scopeLocation($query, $location)
 {
     return $query->where('location', $location);
 }

 public function scopeGender($query, $gender)
 {
     return $query->where('gender', $gender);
 }
 public function scopePhone($query, $phone)
 {
     return $query->where('phone', $phone);
 }
}
