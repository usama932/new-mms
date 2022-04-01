<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'tags',
        'description',
        'added_by',
        'image'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'added_by');
    }
}
