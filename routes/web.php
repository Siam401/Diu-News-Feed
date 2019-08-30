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


Route::group(['prefix'=>'/'],function(){
    Route::get('/',['as'=>'layouts.index', 'uses'=>'PostController@home']);
    Route::get('/single/{id}',['as'=>'singlePost', 'uses'=>'PostController@single']);
    Route::get('/category/{id}/posts',['as'=>'categoryPost', 'uses'=>'PostController@categoriesposts']);
    Route::get('/viewer/login/page','ViewerController@index')->name('viewer.index');
    Route::post('/viewer/login','ViewerController@login')->name('viewer.login');
    Route::post('index/viewer/login','ViewerController@login_index')->name('viewer.login_index');
    Route::get('/viewer/registration/page','ViewerController@registration')->name('viewer.registrationindex');
    Route::post('/viewer/registration','ViewerController@registration_store')->name('viewer.store');
    Route::get('/viewer/logout','ViewerController@logout_viewer')->name('viewer.logout');

});



Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/adminindex', function () {
        return view('admin.adminindex');
    });

    Route::get('createcategory', function () {
        return view('admin.category.createcategory');
    });
    Route::resource('cat', 'CatController');
    Route::resource('post', 'PostController');
    Route::resource('slider', 'SliderController');
    Route::resource('contact', 'ContactController');
    Route::resource('comment', 'CommentController');
    Route::resource('login', 'LoginController');
    Route::resource('user', 'UserController');
    Route::resource('mail', 'MailController');
    Route::get('/mail/confirmation/{token}', 'MailController@confirmation')->name('confirmation');
    Route::get('/user/confirmation/{token}', 'UserController@confirmation')->name('confirmation');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
