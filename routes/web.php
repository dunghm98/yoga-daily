<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

// posts
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin_login');

Route::get('/community','PostsController@index')->name('community');
Route::get('/','HomeController@home')->name('home');
Route::get('/course/{course}', 'HomeController@viewCourse')->name('viewCourse');
Route::get('/explore', 'HomeController@exploreCourse')->name('exploreCourse');
Route::get('/collections/{collection}', 'HomeController@viewCollection')->name('collection.courses');
Route::get('/level/{level}', 'HomeController@viewLevel')->name('level.courses');
Route::get('/therapy', 'HomeController@viewTherapy')->name('therapy');
Route::get('/all-posture', 'HomeController@viewAllPosture')->name('viewAllPosture');
Route::get('/program', 'HomeController@viewProgram')->name('program');
Route::get('/therapy/{therapy}', 'HomeController@viewDetailTherapy')->name('viewDetailTherapy');
Route::get('/program/{program}', 'HomeController@viewDetailProgram')->name('viewDetailProgram');
Route::get('/posture/{posture}', 'HomeController@viewDetailPosture')->name('viewDetailPosture');




Route::get('/pricing', function (){
    return view('courses.pricing-table');
})->name('pricing');
Route::get('/upgrade-to-premium', function (){
    return view('courses.upgrade-premium');
});


// admin
Route::get('/admin/dashboard', 'AdminController@showDashBoard')->name('showDashBoard');

// add to favorite
Route::post('/add-to-favorite/', 'CourseController@addToFavorite')->name('addToFavorite');
Route::get('/favorite', 'CourseController@showFavorite')->name('showFavorite');

Route::group(['middleware'=>'auth',],function(){
    Route::get('/comments','CommentController@showComment');
    //các route khác
});
// add
Route::get('/admin/collection', 'AdminController@createCollection')->name('createCollection');
Route::get('/admin/course', 'AdminController@createCourse')->name('createCourse');;
Route::get('/admin/lesson', 'AdminController@createLesson')->name('createLesson');;
Route::get('/admin/level', 'AdminController@createLevel')->name('createLevel');;
Route::get('/admin/therapy', 'AdminController@createTherapy')->name('createTherapy');;
Route::get('/admin/posture', 'AdminController@createPosture')->name('createPosture');;
Route::get('/admin/program', 'AdminController@createProgram')->name('createProgram');;




//show
Route::get('/admin/collections', 'AdminController@showCollection')->name('showCollections');
Route::get('/admin/courses', 'AdminController@showCourse')->name('showCourses');
Route::get('/admin/lessons', 'AdminController@showLesson')->name('showLessons');
Route::get('/admin/levels', 'AdminController@showLevel')->name('showLevels');
Route::get('/admin/users', 'AdminController@showUser')->name('showUsers');
Route::get('/admin/therapies', 'AdminController@showTherapy')->name('showTherapies');
Route::get('/admin/postures', 'AdminController@showPosture')->name('showPostures');
Route::get('/admin/programs', 'AdminController@showPrograms')->name('showPrograms');



Route::post('/admin/change_status_user', 'AdminController@setPremiumUser')->name('setPremiumUser');


//edit
Route::get('/admin/collections/{collection}', 'AdminController@editCollection')->name('editCollection');
Route::get('/admin/courses/{course}', 'AdminController@editCourse')->name('editCourse');
Route::get('/admin/lessons/{lesson}', 'AdminController@editLesson')->name('editLesson');
Route::get('/admin/levels/{level}', 'AdminController@editLevel')->name('editLevel');
Route::get('/admin/therapies/{therapy}', 'AdminController@editTherapy')->name('editTherapy');
Route::get('/admin/postures/{posture}', 'AdminController@editPosture')->name('editPosture');
Route::get('/admin/programs/{program}', 'AdminController@editProgram')->name('editProgram');





//store
Route::post('/admin/collection', 'AdminController@storeCollection')->name('course.storeCollection');
Route::post('/admin/course', 'AdminController@storeCourse')->name('course.storeCourse');
Route::post('/admin/lesson', 'AdminController@storeLesson')->name('course.storeLesson');
Route::post('/admin/level', 'AdminController@storeLevel')->name('course.storeLevel');
Route::post('/admin/therapy', 'AdminController@storeTherapy')->name('course.storeTherapy');
Route::post('/admin/posture', 'AdminController@storePosture')->name('course.storePosture');
Route::post('/admin/program', 'AdminController@storeProgram')->name('course.storeProgram');




//save
Route::post('/admin/collection/save', 'AdminController@saveCollection')->name('course.saveCollection');
Route::post('/admin/course/save', 'AdminController@saveCourse')->name('course.saveCourse');
Route::post('/admin/lesson/save', 'AdminController@saveLesson')->name('course.saveLesson');
Route::post('/admin/level/save', 'AdminController@saveLevel')->name('course.saveLevel');
Route::post('/admin/therapy/save', 'AdminController@saveTherapy')->name('course.saveTherapy');
Route::post('/admin/posture/save', 'AdminController@savePosture')->name('course.savePosture');
Route::post('/admin/program/save', 'AdminController@saveProgram')->name('course.saveProgram');



//delete
Route::get('/admin/collection/delete/{collection}', 'AdminController@deleteCollection')->name('deleteCollection');
Route::get('/admin/course/delete/{course}', 'AdminController@deleteCourse')->name('deleteCourse');
Route::get('/admin/lesson/delete/{lecture}', 'AdminController@deleteLesson')->name('deleteLesson');
Route::get('/admin/level/delete/{level}', 'AdminController@deleteLevel')->name('deleteLevel');
Route::get('/admin/therapy/delete/{therapy}', 'AdminController@deleteTherapy')->name('deleteTherapy');
Route::get('/admin/posture/delete/{posture}', 'AdminController@deletePosture')->name('deletePosture');
Route::get('/admin/program/delete/{program}', 'AdminController@deleteProgram')->name('deleteProgram');




Route::get('/home','PostsController@index');
Route::get('/p/create','PostsController@create');
Route::post('/p','PostsController@store');
Route::get('/p/{post}','PostsController@show');
Route::get('p/{post}/edit','PostsController@edit');
// commnet
Route::post('/comment','CommentController@store');
// fetch comment
Route::post('/fetch','CommentController@fetch');

//notification
Route::post('/notification','NotificationsController@show');
//search
Route::post('/search','SearchController@searchUser');
Route::get('/search','SearchController@searchUser');



// follow
Route::post('follow/{user}','FollowsController@store');
//like
Route::post('/like','LikesController@store');
// profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.show');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
