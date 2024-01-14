<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = ['comment','fk_id_user','fk_id_image'];

    public function user(){
        return $this->belongsTo(User::class,'fk_id_user');
    }
}
