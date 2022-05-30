<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request_meeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'phone',
        'email',
        'requested_Date',
        'requested_time',
        'company_name',
        'website',
        'notes',
        'employees'
    ];
}
