<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes([
    'password.confirm' => false, // 404 disabled
    'password.email'   => false, // 404 disabled
    'password.request' => false, // 404 disabled
    'password.reset'   => false, // 404 disabled
    'register'         => false, // 404 disabled
]);

Route::group(['as'=>'app.','middleware'=>['auth']],function(){
    // Dashboard Route
    Route::get('/', 'HomeController@index')->name('home');


    // Profile Routes
    Route::get('my-profile', 'ProfileController@my_profile')->name('profile.index');
    Route::post('my-profile/update', 'ProfileController@my_profile_update')->name('profile.update');
    Route::post('password-update', 'ProfileController@change_password')->name('password.update');
   
    // Branch Routes
    // Route::group(['prefix'=>'branchs/','as'=>'branch.'],function(){
    //     Route::get('/','BranchController@index')->name('index');
    //     Route::post('update-or-store','BranchController@updateOrStore')->name('update-or-store');
    //     Route::post('edit','BranchController@edit')->name('edit');
    //     Route::post('delete','BranchController@delete')->name('delete');
    //     Route::post('bulk-delete','BranchController@bulkDelete')->name('bulk-delete');
    //     Route::post('status-change','BranchController@statusChange')->name('status-change');
    //     Route::get('import','BranchController@import')->name('import');
    //     Route::post('import-data','BranchController@importData')->name('import-data');
    // });

});

