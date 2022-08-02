<?php

namespace App\Http\Controllers;
use App\Models\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        $courses = Course::all();
        return view('welcome')->with(compact('courses'));;
    }

    public function homepage()
    {
        $courses = auth()->user()->courses()->get();
        return view('home')->with(compact('courses'));
    }
}
