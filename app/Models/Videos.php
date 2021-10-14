<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;

    protected $table = "videos";
    protected $fillable = [
        'video_title',
        'video_path',
        'video_type',
        'video_desc',
        'course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function coursefiles()
    {
        return $this->hasMany(Course_files::class);
    }
}
