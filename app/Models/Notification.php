<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'image', 'messages', // Add other fields if needed
    ];
    public function news()
    {
        return $this->belongsTo(News::class);
    }
}
