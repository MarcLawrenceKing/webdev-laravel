<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status_id',
        'category_id',
    ];

    public function category()
    { // one to one
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function stats()
    {
        return $this->hasOne(Status::class, 'id', 'status_id');
    }
}
