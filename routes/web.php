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

Route::get('/', function () {
    return view('input_student');
});
Route::get('/danh-sach-sinh-vien',function(){
	return view('student_list');
});
Route::get('/danh-sach-sinh-vien-method',[
	'as'=>'student_list_method',
	'uses'=>'StudentController@showStudentList'
]);

Route::post('/post-student',[
	'as'=>'post-student',
	'uses'=> 'StudentController@addStudent'
]);

Route::get('/input-student',function(){
	return view('input_student');
});

