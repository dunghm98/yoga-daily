<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Course;
use App\Lecture;
use App\Level;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //
    public function showDashBoard()
    {
        return view('admin.dashboard');
    }
    public function storeCollection(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'overview' => 'required'
        ]);
        $collection = \App\Collection::create($data);
        return redirect(route('showCollections'));
    }
    public function storeLevel(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        $collection = \App\Level::create($data);
        return redirect(route('showLevels'));
    }

    public function storeCourse(Request $request)
    {
        $course = $request->validate([
            'title' => 'required',
            'overview' => 'required',
            'duration' => 'required',
            'is_premium' => 'required',
            'level_id' => 'required',
            'link_intro_video' => 'required'
        ]);
        $course = \App\Course::create($course);
        if($request->collection){
            $course->setCollection($request->collection);
        }
        return redirect(route('showCourses'));
    }

    public function storeLesson(Request $request)
    {
        $lesson = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'energy' => 'required | numeric',
            'order' => 'required | numeric',
            'course_id' => 'required| numeric',
            'link' => 'required'
        ]);
        $lesson = \App\Lecture::create($lesson);
        return redirect(route('showLessons'));
    }

    public function createCollection()
    {
        return view('admin.course.collection');
    }
    public function createLevel()
    {
        return view('admin.course.level');
    }
    public function createCourse()
    {
        $levels = \App\Level::all();
        $collections = \App\Collection::all();

        return view('admin.course.course', compact('levels', 'collections'));
    }

    public function createLesson()
    {
        $courses = \App\Course::all();
        return view('admin.course.lesson', compact('courses'));
    }



    public function showCollection()
    {
        $collections =  \App\Collection::all();
        return view('admin.list.collection', compact('collections'));
    }
    public function showUser()
    {
        $users =  \App\User::all();
        return view('admin.list.user', compact('users'));
    }

    public function showCourse()
    {
        $courses = \App\Course::all();
        return view('admin.list.course', compact('courses'));
    }

    public function showLesson()
    {
        $lessons = \App\Lecture::all();
        return view('admin.list.lesson', compact('lessons'));
    }
    public function showLevel()
    {
        $levels = \App\Level::all();
        return view('admin.list.level', compact('levels'));
    }

    public function editCollection( Collection $collection)
    {
        return view('admin.edit.collection', compact('collection'));
    }
    public function editLevel( Level $level)
    {
        return view('admin.edit.level', compact('level'));
    }

    public function saveCollection(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'overview' => 'required'
        ]);
        $collection = \App\Collection::find($request->id);
        $collection->title = $data['title'];
        $collection->overview = $data['overview'];
        $collection->save();
        return redirect(route('showCollections'));
    }
    public function saveLevel(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);
        $level = \App\Level::find($request->id);
        $level->name = $data['name'];
        $level->save();
        return redirect(route('showLevels'));
    }


    public function editCourse( Course $course)
    {
        $collections = \App\Collection::all();
        $levels = \App\Level::all();
        return view('admin.edit.course', compact('course', 'levels', 'collections'));
    }



    public function saveCourse(Request $request)
    {
        /** @var Course $course */
        $data = $request->validate([
            'title' => 'required',
            'overview' => 'required',
            'duration' => 'required',
            'is_premium' => 'required',
            'level_id' => 'required',
            'link_intro_video' => 'required'
        ]);
        $course = \App\Course::find($request->id);
        $course->title = $data['title'];
        $course->overview = $data['overview'];
        $course->duration = $data['duration'];
        $course->is_premium = $data['is_premium'];
        $course->level_id = $data['level_id'];
        $course->link_intro_video = $data['link_intro_video'];
        $course->save();
        if($request->collection){
            $course->setCollection($request->collection);
        }
        return redirect(route('showCourses'));
    }

    public function editLesson(Lecture $lesson)
    {
        $courses = \App\Course::all();
        return view('admin.edit.lesson', compact('courses', 'lesson'));
    }


    public function saveLesson(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'energy' => 'required | numeric',
            'order' => 'required | numeric',
            'course_id' => 'required| numeric',
            'link' => 'required'
        ]);
        $lesson = \App\Lecture::find($request->id);
        $lesson->title = $data['title'];
        $lesson->description = $data['description'];
        $lesson->energy = $data['energy'];
        $lesson->order = $data['order'];
        $lesson->course_id = $data['course_id'];
        $lesson->link = $data['link'];
        $lesson->save();

        return redirect(route('showLessons'));
    }

    public function deleteCollection(Collection $collection)
    {
        $collection = \App\Collection::destroy($collection->id);
        return redirect(route('showCollections'));
    }
    public function deleteCourse(Course $course)
    {
        $course = \App\Course::destroy($course->id);
        return redirect(route('showCourses'));
    }

    public function deleteLesson(Lecture $lecture)
    {
        $course = \App\Lecture::destroy($lecture->id);
        return redirect(route('showLessons'));
    }

    public function deleteLevel(Level $level)
    {
        $course = \App\Level::destroy($level->id);
        return redirect(route('showLevels'));
    }

    public function setPremiumUser(Request $request)
    {
        $user = \App\User::find($request->user_id);
        if($request->status==0)
            $user->isPremiumUser = 1;
        if($request->status==1)
            $user->isPremiumUser = 0;
        $user->save();

    }


}
