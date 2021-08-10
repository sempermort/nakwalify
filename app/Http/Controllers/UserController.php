<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Show the user dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.user-dashboard');
    }

    public function addCourse()
    {
        return view('user.instructor.create-courses');
    }
    public function instructorCourses()
    {
        return view('user.instructor.instructor-courses');
    }

    public function  analytics()
    {
        return view('user.instructor.analytics');
    }

public function   instructorDashboard()
{
    return view('user.instructor.instructor-dashboard');
}
public function  addVideos()
{
    return view('user.instructor.addvideo');
}
public function  addCover()
{
    return view('user.instructor.addcover');
}
public function  viewCourse()
{
    return view('user.instructor.viewcourse');
}
public function courseDetail()
{
    return view('user.instructor.coursedetail');
}

public function deleteacc()
{
    return view('user.account.deleteacc');
}
public function review()
{
    return view('user.instructor.review');
}
public function coursepurch()
{
    return view('user.instructor.coursepurch');
}
public function notification()
{
    return view('user.account.notification');
}
public function myaccount()
{
    return view('user.account.myaccount');
}
public function earnings()
{
    return view('user.instructor.earnings');
}
public function skills()
{
    return view('user.student.skills');
}
public function badges()
{
    return view('user.student.badges');
}
public function cert()
{
    return view('user.student.certificate');
}
public function createcert()
{
    return view('user.instructor.createcert');
}
public function category()
{
    return view('user.category');
}
public function accSetting()
{
    return view('user.account.accsetting');
}
public function lcontent()
{
    return view('layouts.learncontent');
}
}
