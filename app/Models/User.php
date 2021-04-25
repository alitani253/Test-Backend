<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $tel
 * @property string $adress
 * @property string $email
 * @property string $password
 * @property integer $created_by
 * @property string $role
 * @property string $created_at
 * @property string $updated_at
 * @property string $remember_token
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'prenom',
        'tel',
        'email',
        'adress',
        'password',
        'created_by',
        'role',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
    public function boutiques()
    {
        return $this->hasMany(Boutique::class);
    }

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }
    public function aviss()
    {
        return $this->hasMany(Avis::class);
    }


}
