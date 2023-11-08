<?php

namespace App\Models\posts;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
