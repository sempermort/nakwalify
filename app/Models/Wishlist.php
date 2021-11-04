<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = "wishlists";

    protected $fillable = [

        'course_id',
        'video_id',
        'user_id',
        'wishtype'

    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

}
