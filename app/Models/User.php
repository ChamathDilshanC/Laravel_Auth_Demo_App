<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     * මේ method එක Laravel එකට කියනවා database එකේ තියෙන data විවිධ data types වලට කොහොමද convert කරන්නේ කියලා.
     */
    protected function casts(): array
    {
        return [
            // Email verify වුන දිනය සහ වේලාව database එකේ තියෙන හැටියෙන් DateTime object එකක් බවට convert කරනවා
            // Password එක database එකට save කරද්දී automatically hash කරනවා
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function todos()
{
    return $this->hasMany(Todo::class);
}
}
