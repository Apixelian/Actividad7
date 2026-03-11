<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kit extends Model
{
    // PK Personalizada
    protected $primaryKey = 'kit_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;

    protected $fillable = [
        'name',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'kit_id');
    }
}
