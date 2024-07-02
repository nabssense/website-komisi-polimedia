<?php

namespace App\Models;

use App\Models\User;
use App\Models\Question;
use App\Models\Discussion;
use Conner\Likeable\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Answer extends Model
{
use HasFactory, Likeable;
    protected $table = 'discussions_answer';
    protected $fillable = [
        'user_id',
        'discussion_id',
        'answer',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function discussion()
    {
        return $this->belongsTo(Discussion::class);
    }
}
