<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeriodFunding extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'name', 'slug', 'start_date', 'end_date'];

    public function getImagePathAttribute()
    {
        // Jika path sudah lengkap atau adalah gambar default
        if (Str::startsWith($this->image, 'img/')) {
            return asset($this->image);
        }

        // Jika tidak, tambahkan 'storage/' dan kembalikan
        return asset('storage/' . $this->image);
    }
    
}
