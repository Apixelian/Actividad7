<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory; 

class Group extends Model
{
    use HasFactory;

    // PK Personalizada
    protected $primaryKey = 'group_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

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
