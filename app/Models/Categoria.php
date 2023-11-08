<?php

namespace App\Models;

use App\Models\posts\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome'
    ];

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
