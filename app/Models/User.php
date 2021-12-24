<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Evento que se ejecuta cunado un usuario es creado
    protected static function boot()
    {
        parent::boot();
        // Asignar perfil una vez se haya creado un usuario nuevo
        static::created(function($user){
            $user->perfil()->create();
        });
    }

    // Relacion de 1:n de usuario a recetas
    public function ordentrabajo()
    {
        return $this->hasMany(OrdenTrabajo::class);
    }

    // Relacion 1:1 de usuario a perfil
    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }

    // Relacion de 1:n de usuario a recetas
    public function proveedor()
    {
        return $this->hasMany(Proveedor::class);
    }
}
