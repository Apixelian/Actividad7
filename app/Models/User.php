<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    // PK personalizada
    protected $primaryKey = 'user_id';
    public $incrementing = true; // Si el ID es auto-incrementable
    protected $keyType = 'int'; // Tipo de dato del ID

    public $timestamps = false;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'group_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id', 'group_id');
    }
}
