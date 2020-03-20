<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Course;
use App\Level;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $levels = \App\Level::all();
        $courses = \App\Course::all();
        return view('home', compact('courses', 'levels', 'collections'));
    }

    public function community()
    {
        $this->middleware('auth');

        return view('posts.index');
    }

    public function exploreCourse()
    {
        $courses = \App\Course::all();
        return view('courses.explore', compact('courses'));
    }

    public function viewCourse(Course $course)
    {
        return view('courses.course', compact('course'));
    }

    public function viewCollection(Collection $collection)
    {
        return view('courses.collection', compact('collection'));
    }

    public function viewLevel(Level $level)
    {
        return view('courses.level', compact('level'));
    }

}
