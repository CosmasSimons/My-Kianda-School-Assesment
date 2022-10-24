<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherProfile extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $casts = [
        
        'tfaculty'=> 'array',
        'teaching1' => 'array',
        'teaching2' => 'array',
        'teaching3' => 'array',
        'teaching4' => 'array',
        'teaching5' => 'array',
        'classincharge' => 'array',

    ];
}
