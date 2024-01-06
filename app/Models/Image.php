<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Image extends Model
{
    use HasFactory;

    protected $table = "images";

   protected $fillable = ['description','image','user_id'];

    // Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function description(): Attribute {

        return new Attribute(

            get: function ($value){
                return ucwords($value);
            },

            set: fn($vale) => strtolower($vale),
        );
    }

}
