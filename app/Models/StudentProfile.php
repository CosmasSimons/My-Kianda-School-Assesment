<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [

        'class' => 'array',
        'subject1' => 'array',
        'subject2' => 'array',
        'subject3' => 'array',
        'subject4' => 'array',
        'subject5' => 'array',
        'subject6' => 'array',
        'subject7' => 'array',
        'subject8' => 'array',
        'subject9' => 'array',
        'subject10' => 'array',
        'subject11' => 'array',
        'subject12' => 'array',


    ];
}
