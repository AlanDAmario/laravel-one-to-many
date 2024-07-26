<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
        'slug',
        'cover_image'
    ];

    public function type()
    {
        // TYPE HA SOLO PROJECT ASSOCIATO
        return $this->belongsTo(Type::class);
    }
}
