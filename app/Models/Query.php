<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'message',
        'send_by',
        'reply_by',
        'attachments'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'send_by');
    }

}
