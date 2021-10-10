<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mediacover extends Model
{
    use HasFactory;
    protected $table = "mediacovers";

    protected $fillable = [
        'title',
        'file_path',
        'file_type',
        'course_id',
    ];

    public function Course()
    {
        return $this->belongsTo(Videos::class);
    }
}
