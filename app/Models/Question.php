<?php

namespace App\Models;

use App\Models\Answer;
use App\Models\CategoryDiscussion;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'content_preview',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(CategoryDiscussion::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
