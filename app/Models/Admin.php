<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_username',
        'admin_name',
        'admin_email',
        'admin_password',
        'admin_phone_number',
    ];
}
