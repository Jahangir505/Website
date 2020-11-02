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


Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();
//website routes
Route::get('/', 'WebsiteController@index')->name('');
Route::get('about', 'WebsiteController@about')->name('');
Route::get('contact', 'WebsiteController@contact')->name('');
Route::get('service', 'WebsiteController@service')->name('');
Route::get('portfolio', 'WebsiteController@portfolio')->name('');
Route::get('portfolio/view', 'WebsiteController@portfolio_view')->name('');
Route::get('blog', 'WebsiteController@blog')->name('');
Route::get('blog/view', 'WebsiteController@blog_view')->name('');
Route::post('contact/submit', 'WebsiteController@insert_contact')->name('');

//admin panel routes
Route::get('admin', 'AdminController@index')->name('');
Route::get('admin/user', 'UserController@index')->name('');
Route::get('admin/user/add', 'UserController@add')->name('');
Route::get('admin/banner', 'BannerController@index')->name('');
Route::get('admin/banner/add', 'BannerController@add')->name('');
Route::post('admin/banner/insert', 'BannerController@insert')->name('');
Route::post('admin/banner/softdelete', 'BannerController@softdelete')->name('');
Route::get('admin/manage/social', 'ManageController@social')->name('');
Route::post('admin/manage/social/update', 'ManageController@social_update')->name('');
Route::get('admin/pagecontent', 'PageContentController@index')->name('');
Route::get('admin/contactus', 'ContactusController@index')->name('');
Route::get('admin/contactus/view/{id}', 'ContactusController@view')->name('');
Route::get('admin/contactus/softdelete/{id}', 'ContactusController@soft_delete')->name('');
Route::get('admin/recycle', 'RecycleController@index')->name('');
Route::get('admin/recycle/banner', 'RecycleController@banner')->name('');
Route::get('admin/recycle/banner/restore/{id}', 'RecycleController@banner_restore')->name('');
Route::post('admin/recycle/banner/delete', 'RecycleController@banner_delete')->name('');
