<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_files extends Model
{
    use HasFactory;

    protected $table = "course_files";

    protected $fillable = [
        'course_file_title',
        'file_path',
        'file_type',
        'videos_id',
    ];

    public function Videos()
    {
        return $this->belongsTo(Videos::class);
    }
}
