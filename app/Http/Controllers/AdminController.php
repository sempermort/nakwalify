<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.admin-dashboard');
    }
    public function home(){
        $coz=Course::all();
        return view('welcome')->with('coz',$coz);
   }
}
