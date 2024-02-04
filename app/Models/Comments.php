<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $table = "comments";

    protected $fillable = ['comment','user_id','image_id'];



    public function user(){
        return $this->belongsTo(User::class,'fk_id_user');
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

}
