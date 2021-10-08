<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;


    protected $casts = [
        'mainrequire' => 'array',
        'mainwlearn' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'course_title','course_subt', 'course_des','language',
        'price','mainrequire','mainwlearn',
    ];


    public function Videos()
    {
        return $this->hasMany(Videos::class);
    }
}
