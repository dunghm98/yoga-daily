<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function showFavorite()
    {
        return view('courses.favorite');
    }
    //
    public function addToFavorite(Request $request)
    {
        if (auth()->user()){
            try {
                $course_id = $request->input('course_id');
                auth()->user()->setFavoriteCourse($course_id);
                return request()->ajax() ?
                    response()->json([
                        'status' => 200,
                        'message' => 'Thêm vào yêu thích thành công.'
                    ]) :
                    'Thêm vào yêu thích thành công.';
            }
            catch (\Exception $e) {
                return request()->ajax() ?
                    response()->json([
                        'status' => 400,
                        'message' => $e->getMessage()
                    ]) :
                    $e->getMessage();
            }
        }
        else{
            return request()->ajax() ?
                response()->json([
                    'status' => 500,
                    'message' => 'Chưa đăng nhập'
                ]) :
                'Chưa đăng nhập';
        }

    }
}
