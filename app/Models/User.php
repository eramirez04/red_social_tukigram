<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Casts\Attribute; // modifica los atributos de las tablas
class User extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'foto'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected function name(): Attribute{
        return new Attribute(
            // este metodo al hacer una consulta las primeras letras de una palabra las convierte en mayuscula
        // lo cual no modifica en la BD
            get: function ($value){
                return ucwords($value);
            },

            // la funcion convierte todos los atributos
            // de la tabla en minuscula, este funcion modifica en la BD

            set: fn($value) =>strtolower($value), // hay vairas dos formas de hacerlos, de esta manera
                                                  // o como la del setter
        );
    }
    // relacion uno a muchos
    public function images(){
        return $this-> hasMany('App\Models\Image');
    }
}
