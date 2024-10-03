<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'admin_username',
        'admin_name',
        'admin_email',
        'admin_password',
        'admin_phone_number',
    ];

    protected $hidden = [
        'admin_password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
