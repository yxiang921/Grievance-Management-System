<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grievance extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'description',
        'status',
        'category',
        'location',
        'grievance_image',
        'due_date',
        'priority',
        'is_assigned',

        'outsource_remark',
        'process_remark',
        'process_image',

        'person_in_charged',

        'latitude',
        'longitude',

        'department_id',
        'user_id',
    ];
}
