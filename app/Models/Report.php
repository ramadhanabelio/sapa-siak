<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'reports';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
    ];

    public const STATUS_PENDING = 'pending';
    public const STATUS_PROSES = 'proses';
    public const STATUS_SELESAI = 'selesai';
}
