<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable =[
        'name',
        'description',
        'image',
        'status',
    ];

    
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
    public function authors()
    {
        return $this->hasMany(Author::class, 'category_id', 'id');
    }
}
