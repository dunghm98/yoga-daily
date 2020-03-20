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
Route::get('/community','PostsController@index')->name('community');
Route::get('/','HomeController@home')->name('home');
Route::get('/course/{course}', 'HomeController@viewCourse')->name('viewCourse');
Route::get('/explore', 'HomeController@exploreCourse')->name('exploreCourse');
Route::get('/collections/{collection}', 'HomeController@viewCollection')->name('collection.courses');
Route::get('/level/{level}', 'HomeController@viewLevel')->name('level.courses');

Route::get('/pricing', function (){
    return view('courses.pricing-table');
})->name('pricing');
Route::get('/plan', function (){
    return view('courses.subscribe-working');
});


// admin
Route::get('/admin/dashboard', function (){
    return view('admin.dashboard');
});

// add
Route::get('/admin/collection', 'AdminController@createCollection')->name('createCollection');
Route::get('/admin/course', 'AdminController@createCourse')->name('createCourse');;
Route::get('/admin/lesson', 'AdminController@createLesson')->name('createLesson');;

//show
Route::get('/admin/collections', 'AdminController@showCollection')->name('showCollections');
Route::get('/admin/courses', 'AdminController@showCourse')->name('showCourses');
Route::get('/admin/lessons', 'AdminController@showLesson')->name('showLessons');

//edit
Route::get('/admin/collections/{collection}', 'AdminController@editCollection')->name('editCollection');
Route::get('/admin/courses/{course}', 'AdminController@editCourse')->name('editCourse');
Route::get('/admin/lessons/{lesson}', 'AdminController@editLesson')->name('editLesson');

//store
Route::post('/admin/collection', 'AdminController@storeCollection')->name('course.storeCollection');
Route::post('/admin/course', 'AdminController@storeCourse')->name('course.storeCourse');
Route::post('/admin/lesson', 'AdminController@storeLesson')->name('course.storeLesson');

//save
Route::post('/admin/collection', 'AdminController@saveCollection')->name('course.saveCollection');
Route::post('/admin/course', 'AdminController@saveCourse')->name('course.saveCourse');
Route::post('/admin/lesson', 'AdminController@saveLesson')->name('course.saveLesson');



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
// follow
Route::post('follow/{user}','FollowsController@store');
//like
Route::post('/like','LikesController@store');
// profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.show');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');
