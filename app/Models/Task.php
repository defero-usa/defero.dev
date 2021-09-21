<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $casts = [
        'responsible_ids' => 'array',
        'dates' => 'array',
        'has_attachments' => 'array',
        'completed_at' => 'datetime',
    ];

}
