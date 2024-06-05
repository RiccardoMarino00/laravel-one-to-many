<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;


class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'link', 
    ];
    public function type() {
        return $this->hasMany(Type::class);
    }
}
