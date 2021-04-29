<?php

//use App\Http\Controllers\AddAdmin;
////use App\Http\Controllers\MainServices;
//use App\Http\Controllers\ManageVendors;
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

//------------- Start Route Public Side Page -------------//
//Home Page
Route::get('/', function () {
    return view('public.landing_page');
});

//About us Page
Route::get('/about_us', function () {
    return view('public.about_us');
});

//Services Page
Route::get('/services', function () {
    return view('public.services');
});

//Blog Page
Route::get('/blog', function () {
    return view('public.blog');
});

//Blog Page
Route::get('/contact_us', function () {
    return view('public.contact_us');
});
//------------- End Route Public Side Page -------------//




//------------- Start Route Admin Side Page -------------//

Route::get('/admin-side', function () {
    return view('public.dashboard_v1.dashboard');
});

//Add Admin
Route::get('/admin', function () {
    return view('public.dashboard_v1.addAdmin');
});

//Manage Vendors
Route::get('/vendor', function () {
    return view('public.dashboard_v1.manageVendors');
});

//Manage Services
Route::get('/manage-services', function () {
    return view('public.dashboard_v1.manageServices');
});

//Manage Posts
Route::get('/manage-posts', function () {
    return view('public.dashboard_v1.managePosts');
});

Route::get('/chat', function () {
    return view('public.dashboard_v1.chat');
});

//------------- End Route Admin Side Page -------------//



//------------- Start Manage Admins -------------//

Route::resource('add', AddAdmin::class)->middleware('auth');

//Show all data
Route::get('/admin', 'AddAdmin@index')->middleware('auth');

//Delete Admin
Route::get('/admin/delete/{id}' ,'AddAdmin@destroy')->middleware('auth');

//Edit Admin
Route::get('/admin/edit/{id}','AddAdmin@edit')->middleware('auth');

//Update Admin
Route::post('/admin/edit/{id}/updated','AddAdmin@update')->middleware('auth');

//------------- End Manage Vendors -------------//




//------------- Start Manage Vendors -------------//
Route::resource('worker', ManageVendors::class);

//Show all data
Route::get('/worker', 'ManageVendors@index')->middleware('auth');

//Edit Vendors
Route::get('worker/edit/{id}','AddAdmin@edit')->middleware('auth');

//Update Vendor
Route::post('/worker/edit/{id}/updated','ManageVendors@update')->middleware('auth');

//Delete Vendor
Route::get('/worker/delete/{id}','ManageVendors@destroy')->middleware('auth');

//Approved
Route::get('/worker/Approved/{id}','ManageVendors@edit');
//------------- End Manage Vendors -------------//



//------------- Start Main Services -------------//
Route::resource('main-services', MainServices::class);

//Show all data
Route::get('/main-services', 'MainServices@index')->middleware('auth');

//Delete MainServices
Route::get('/main-services/delete/{id}', 'MainServices@destroy')->middleware('auth');



Route::get('/services/{post_type?}', 'postController@index');
Route::get('/services', 'postController@index');
Route::post('/services/{post_type}/post', 'postController@store');

//------------- End Main Services -------------//
Route::get('/manage-posts', 'postController@show');
Route::get('post/Approved/{post_id}', 'postController@update');
Route::get('post/delete/{post_id}', 'postController@destroy');
Route::get('/services/single_page_post/{post_id}', 'postController@display');
//------------- Start Manage Post -------------//

//------------- End Manage Post -------------//

//------------- Start Login & Register -------------//
Route::post('register', 'Auth\RegisterController@create')->name('register');

Route::get('login', 'Auth\LoginController@login')->name('login');
//Route::post('store', 'Auth\AuthController@store');
//
//Route::post('/login', 'Auth\AuthController@authenticate');
//Route::get('logout', 'Auth\AuthController@logout')->name('logout');
//
//Route::get('/home', 'Auth\AuthController@home')->name('home');
//------------- End Login & Register -------------//



//Delete comment
Route::get('/services/single_page_post/delete/{id}', 'CommentController@destroy');

//Delete in posts page
Route::get('/services/{post_type}/delete/{id}', 'CommentController@destroy');

//To show Comment
Route::get('/Comment/{user_id}/{post_type}', 'CommentController@show');

//To Add Comment
Route::post('/storeComment/{post_id}/{post_type}', 'CommentController@store');


//------------- Start Manage Post -------------//
Route::get('user/{user_name}', 'profileController@index');
//------------- Start Manage Post -------------//


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
