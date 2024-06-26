<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;
    
    protected $table = 'forum_discussions';

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'question_preview',
        'question',
    ];

    // Definisikan relasi 'user'
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi 'category'
    public function category()
    {
        return $this->belongsTo(CategoryDiscussion::class);
    }

    

}
