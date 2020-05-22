<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Course;
use App\Lecture;
use App\Level;
use App\Posture;
use App\Program;
use App\Therapy;
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
        $countCollection = \App\Collection::all()->count();
        $countCourse = \App\Course::all()->count();
        $countLesson = \App\Lecture::all()->count();
        $countUser = \App\User::all()->count();
        $dataCount = [];
        $dataCount['collection'] = $countCollection;
        $dataCount['course'] = $countCourse;
        $dataCount['lesson'] = $countLesson;
        $dataCount['user'] = $countUser;
        return view('admin.dashboard', compact('dataCount'));
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
    public function storeTherapy(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        $therapy = \App\Therapy::create($data);
        if($request->posture){
            $therapy->setPosture($request->posture);
        }
        return redirect(route('showTherapies'));
    }
    public function storeProgram(Request $request)
    {
        $data = $request->validate([
            'title' => 'required'
        ]);

        $program = \App\Program::create($data);
        if($request->posture){
            $program->setPosture($request->posture);
        }
        return redirect(route('showPrograms'));
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

    public function storePosture(Request $request)
    {
        $posture = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'effective' => 'required',
            'video' => 'required',
            'note' => 'required',
        ]);
        $posture = \App\Posture::create($posture);
        if($request->therapy){
            $posture->setTherapy($request->therapy);
        }
        return redirect(route('showPostures'));
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

    public function createTherapy()
    {
        $postures = \App\Posture::all();
        return view('admin.course.therapy', compact('postures'));
    }
    public function createProgram()
    {
        $postures = \App\Posture::all();
        return view('admin.course.program', compact('postures'));
    }

    public function createPosture()
    {
        $therapies = \App\Therapy::all();
        return view('admin.course.posture', compact('therapies'));
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
    public function showTherapy()
    {
        $therapies =  \App\Therapy::all();
        return view('admin.list.therapy', compact('therapies'));
    }
    public function showPrograms()
    {
        $programs =  \App\Program::all();
        return view('admin.list.program', compact('programs'));
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
    public function showPosture()
    {
        $postures = \App\Posture::all();
        return view('admin.list.posture', compact('postures'));
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
    public function editTherapy( Therapy $therapy)
    {
        $postures = Posture::all();
        return view('admin.edit.therapy', compact('therapy','postures'));
    }
    public function editProgram( Program $program)
    {
        $postures = Posture::all();
        return view('admin.edit.program', compact('program','postures'));
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
    public function saveTherapy(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $therapy = \App\Therapy::find($request->id);
        $therapy->title = $data['title'];
        $therapy->description = $data['description'];
        $therapy->save();
        if($request->posture){
            $therapy->setPosture($request->posture);
        }
        return redirect(route('showTherapies'));
    }

    public function saveProgram(Request $request)
    {
        $data = $request->validate([
            'title' => 'required'
        ]);
        $program = \App\Program::find($request->id);
        $program->title = $data['title'];
        $program->save();
        if($request->posture){
            $program->setPosture($request->posture);
        }
        return redirect(route('showPrograms'));
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

    public function editPosture( Posture $posture)
    {
        $therapies = \App\Therapy::all();
        return view('admin.edit.posture', compact('posture','therapies' ));
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

    public function savePosture (Request $request)
    {
        /** @var Posture $posture */
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'effective' => 'required',
            'video' => 'required',
            'note' => 'required',
        ]);
//        dd($data);
        $posture = \App\Posture::find($request->id);
        $posture->title = $data['title'];
        $posture->description = $data['description'];
        $posture->effective = $data['effective'];
        $posture->video = $data['video'];
        $posture->note = $data['note'];
        $posture->save();
        if($request->therapy){
            $posture->setTherapy($request->therapy);
        }
        return redirect(route('showPostures'));
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
    public function deleteTherapy(Therapy $therapy)
    {
        $therapy = \App\Therapy::destroy($therapy->id);
        return redirect(route('showTherapies'));
    }
    public function deletePosture(Posture $posture)
    {
        $posture = \App\Posture::destroy($posture->id);
        return redirect(route('showPostures'));
    }
    public function deleteProgram(Program $program)
    {
        $program = \App\Program::destroy($program->id);
        return redirect(route('showPrograms'));
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
