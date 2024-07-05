<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholarshipFunding extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'scholarship_type',
        'statement_letter',
        'mbkm_program',
        'student_activity',
        'activity_certificate',
        'competition_status',
        'competition_name',
        'competition_level',
        'competition_rank',
        'competition_certificate',
        'period_id',
    ];

    public function period()
    {
        return $this->belongsTo(PeriodFunding::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
