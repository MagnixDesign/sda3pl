<?php

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/user/user', 'Lavalite\User\Http\Controllers\UserAdminController');
});

// User routes for user
Route::group(['prefix' => 'user'], function () {
    Route::resource('/user/user', 'Lavalite\User\Http\Controllers\UserUserController');
});

// Public routes for user
Route::get('user/user', 'Lavalite\User\Http\Controllers\UserPublicController@index');
Route::get('user/user/{slug?}', 'Lavalite\User\Http\Controllers\UserPublicController@show');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/user/role', 'Lavalite\User\Http\Controllers\RoleAdminController');
});

// User routes for role
Route::group(['prefix' => 'user'], function () {
    Route::resource('/user/role', 'Lavalite\User\Http\Controllers\RoleUserController');
});

// Public routes for role
Route::get('user/role', 'Lavalite\User\Http\Controllers\RolePublicController@index');
Route::get('user/role/{slug?}', 'Lavalite\User\Http\Controllers\RolePublicController@show');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/user/permission', 'Lavalite\User\Http\Controllers\PermissionAdminController');
});

// User routes for permission
Route::group(['prefix' => 'user'], function () {
    Route::resource('/user/permission', 'Lavalite\User\Http\Controllers\PermissionUserController');
});

// Public routes for permission
Route::get('user/permission', 'Lavalite\User\Http\Controllers\PermissionPublicController@index');
Route::get('user/permission/{slug?}', 'Lavalite\User\Http\Controllers\PermissionPublicController@show');
