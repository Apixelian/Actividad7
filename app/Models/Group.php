<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    // PK Personalizada
    protected $primaryKey = 'group_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'group_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'group_id');
    }

}
