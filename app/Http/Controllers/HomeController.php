<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    public function welcome(Request $request)
    {
        
        $ip = $request->ip();
        // $res = Http::get('http://ipinfo.io/'.$ip.'?token=7d558664b06ca5');

        // $city = $res['city'];
        // $country = $res['country'];

        $courses = Course::where('activated', false)->take(9)->get();
        return view('welcome')->with(compact('courses'));;
    }

    public function homepage()
    {
        return view('home');
    }
}
