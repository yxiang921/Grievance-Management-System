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

    // 指定不需要被返回的字段，例如密码
    protected $hidden = [
        'admin_password',
        'remember_token',
    ];

    // 如果你使用了不同的字段名来存储密码，定义一个特殊的字段映射
    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
