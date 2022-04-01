<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_user extends Model
{
    use HasFactory;
    protected $table = 'role_user';
    public function roled()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
