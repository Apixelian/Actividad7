<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    // PK Personalizada
    protected $primaryKey = 'course_id';
    public $incrementing = true;
    protected $keyType = 'int';

    public $timestamps = false;
    
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
