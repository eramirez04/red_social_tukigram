<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Relacion muchos a muchos con la tabla users
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
