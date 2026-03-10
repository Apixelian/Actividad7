<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // PK Personalizada
    protected $primaryKey = 'course_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'course_key',
        'title',
        'cover',
        'content',
        'group_id',
        'kit_id',
    ];

    public function kit()
    {
        return $this->belongsTo(Kit::class, 'kit_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}
