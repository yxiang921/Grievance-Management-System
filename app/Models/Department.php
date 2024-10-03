<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Department extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'department_name',
        'department_category',

        'department_key',
        'department_password'
    ];

    protected $hidden = [
        'department_password',
        'remember_token',
    ];

    public function getAuthIdentifierName()
    {
        return 'department_key';
    }

    public function getAuthIdentifier()
    {
        return $this->department_key;
    }

    public function getAuthPassword()
    {
        return $this->department_password;
    }


}
