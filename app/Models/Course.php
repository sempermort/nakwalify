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
        'course_title','course_subt', 'course_des','language', 'category_Id','subcategory_id',
        'price','mainrequire','mainwlearn',
    ];


    public function Videos()
    {
        return $this->hasMany(Videos::class);
    }
    public function wished()
    {
        return $this->hasMany(Wishlist::class);
    }
    public function mediaCover()
    {
        return $this->hasone(Mediacover::class);
    }
    public function coursefilec()
    {
        return $this->hasManyThrough(Course_files::class, Videos::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_Id','id');
    }
}
