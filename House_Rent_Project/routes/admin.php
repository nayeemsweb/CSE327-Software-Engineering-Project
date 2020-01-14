<?php
Route::group(['middleware'=> 'auth'],function () {
    Route::get('/admin', function () {
        return view('admin.pages.dashboard.index');
    })->name('admin.dashboard');
    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'Admin\BlogController@index')->name('admin.blog.index');
        Route::get('/create', 'Admin\BlogController@create')->name('admin.blog.create');
        Route::post('/store', 'Admin\BlogController@store')->name('admin.blog.store');
        Route::get('/delete/{id}', 'Admin\BlogController@delete')->name('admin.blog.delete');
    });

    Route::group(['prefix' => 'user', 'middleware'=> 'admin'], function () {
        Route::get('/list', 'Admin\AdminUsersController@index')->name('admin.user.list');
        Route::get('/admin', 'Admin\AdminUsersController@create')->name('admin.user.index');
    });
});

