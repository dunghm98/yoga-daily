<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Course;
use App\Level;
use App\Posture;
use App\Program;
use App\Therapy;
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
        return view('home', compact('courses', 'levels'));
    }

    public function community()
    {
        $this->middleware('auth');

        return view('posts.index');
    }

    public function exploreCourse()
    {
        if(isset(\request()->search)){
            $title = \request()->search;
            $courses = Course::where('title','like','%'.$title.'%')
                ->orWhere('title','like','%'.$title.'%')->get();
        } else {
            $courses = \App\Course::all();
        }
        return view('courses.explore', compact('courses'));
    }
    public function viewAllPosture()
    {
        if(isset(\request()->search)){
            $title = \request()->search;
            $postures = Posture::where('title','like','%'.$title.'%')
                ->orWhere('title','like','%'.$title.'%')->get();
        } else {
            $postures = \App\Posture::all();
        }
        return view('courses.all-posture', compact('postures'));
    }
    public function viewTherapy()
    {
        if(isset(\request()->search)){
            $title = \request()->search;
            $therapies = Therapy::where('title','like','%'.$title.'%')
                ->orWhere('title','like','%'.$title.'%')->get();
        } else {
            $therapies = \App\Therapy::all();
        }
        return view('courses.therapy', compact('therapies'));
    }
    public function viewProgram()
    {
        if(isset(\request()->search)){
            $title = \request()->search;
            $programs = Program::where('title','like','%'.$title.'%')
                ->orWhere('title','like','%'.$title.'%')->get();
        } else {
            $programs = \App\Program::all();
        }
        return view('courses.program', compact('programs'));
    }

    public function viewDetailTherapy(Therapy $therapy)
    {
        return view('courses.detail-therapy', compact('therapy'));
    }
    public function viewDetailProgram(Program $program)
    {
        return view('courses.detail-program', compact('program'));
    }


    public function viewDetailPosture(Posture $posture)
    {
        return view('courses.detail-posture', compact('posture'));
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
