<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = ['comment','fk_id_user'];

    public function user(){
        return $this->belongsTo('App\Models\User','fk_id_user');
    }
}
