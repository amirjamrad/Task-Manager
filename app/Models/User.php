<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /** @use HasFactory<\Database\Factories\UserFactory> */
    protected $guarded=[];
    use HasFactory;

    protected function casts()
    {
        return [
          'email_verified_at' => 'datetime',
          'password' => 'hashed',
        ];
    }
}
