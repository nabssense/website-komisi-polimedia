<?php

namespace App\Models;

use Database\Seeders\CategoryNewsSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'content',
        'image',
        'slug',
        'headline_status',
        'headline_image',
        // tambahkan kolom lainnya sesuai kebutuhan
    ];

    // Definisikan relasi 'user'
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Definisikan relasi 'category'
    public function category()
    {
        return $this->belongsTo(CategoryNews::class);
    }
}
