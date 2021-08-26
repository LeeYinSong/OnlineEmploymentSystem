<?php

use Illuminate\Support\Facades\Route;

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
    return view('MainPage');
});

Route::get('/insertResume',[
    'uses'=>'App\Http\Controllers\ResumeController@create',
    'as'=>'Resume'
]);

Route::post('/addResume/store',[ 
    'uses'=>'App\Http\Controllers\ResumeController@store',
    'as'=>'addResume.store' 
]);

Route::get('/editResume/{id}',[
    'uses'=>'App\Http\Controllers\ResumeController@edit',
    'as'=>'editResume'
]);

Route::post('/editResume/update',[ 
    'uses'=>'App\Http\Controllers\ResumeController@update',
    'as'=>'editResume.update' 
]);


Route::get('/insertEducation', [
    'uses'=>'App\Http\Controllers\EducationLevelController@create',
    'as'=>'education_level'
]);

Route::post('/addEducation/store', [
    'uses'=>'App\Http\Controllers\EducationLevelController@store',
    'as'=>'addEducation.store'
]);

Route::get('/insertRecruitment',[
    'uses'=>'App\Http\Controllers\RecruitmentController@create',
    'as'=>'Recruitment'
]);

Route::post('/addRecruitment/store',[ 
    'uses'=>'App\Http\Controllers\RecruitmentController@store',
    'as'=>'addRecruitment.store' 
]);

Route::get('/editRecruitment/{id}',[
    'uses'=>'App\Http\Controllers\RecruitmentController@edit',
    'as'=>'editRecruitment'
]);

Route::post('/editRecruitment/update',[ 
    'uses'=>'App\Http\Controllers\RecruitmentController@update',
    'as'=>'editRecruitment.update' 
]);

Route::get('/insertCareer', [
    'uses'=>'App\Http\Controllers\CareerLevelController@create',
    'as'=>'Career_Level'
]);

Route::post('/addCareer/store', [
    'uses'=>'App\Http\Controllers\CareerLevelController@store',
    'as'=>'addCareer.store'
]);   

Route::get('/ResumeDetail/{id}', [
    'uses'=>'App\Http\Controllers\ResumeController@ResumeDetail',
    'as'=>'ResumeDetail'
]);

Route::get('/RecruitmentDetail/{id}', [
    'uses'=>'App\Http\Controllers\RecruitmentController@RecruitmentDetail',
    'as'=>'RecruitmentDetail'
]);
    


Auth::routes();

Route::prefix('user')->name('user.')->group(function(){
    
        Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
        Route::view('/Studentlogin','student.Studentlogin')->name('login');
        Route::view('/StudentRegister','student.StudentRegister')->name('register');
        Route::post('/create',[App\Http\Controllers\StudentController::class,'create'])->name('create');
        Route::post('/check',[App\Http\Controllers\StudentController::class,'check'])->name('check');
    });

        Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
        Route::view('/home','student.home')->name('home');
        Route::view('/ViewRecruitment','ViewRecruitment')->name('ViewRecruitment');
        Route::post('/logout',[App\Http\Controllers\StudentController::class,'logout'])->name('logout');
        
    });

});

Route::prefix('Employer')->name('Employer.')->group(function(){
    
    Route::middleware(['guest:employer', 'PreventBackHistory'])->group(function(){
        Route::view('/EmployerLogin','employer.EmployerLogin')->name('login');
        Route::view('/EmployerRegister','employer.EmployerRegister')->name('register');
        Route::post('/create',[App\Http\Controllers\EmployerController::class,'create'])->name('create');
        Route::post('/check',[App\Http\Controllers\EmployerController::class,'check'])->name('check');
    });

        Route::middleware(['auth:employer', 'PreventBackHistory'])->group(function(){
        Route::view('/EmployerHome','employer.EmployerHome')->name('EmployerHome');
        Route::view('/ViewRecruitment','ViewRecruitment')->name('ViewRecruitment');
        Route::post('/logout',[App\Http\Controllers\EmployerController::class,'logout'])->name('logout');
    });

});







// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// recruitment routes
Route::get('/ViewRecruitment', [App\Http\Controllers\RecruitmentController::class, 'ViewRecruitment'])->name('ViewRecruitment');


// resume routes
Route::get('/ViewResume', [App\Http\Controllers\ResumeController::class, 'ViewResume'])->name('ViewResume');