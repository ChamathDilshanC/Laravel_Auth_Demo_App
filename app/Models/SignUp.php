<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SignUp extends Model
{
    protected $table = 'sign_ups';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
