<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// Route::redirect('/home', '/admin');

Auth::routes(['register' => true]);
Route::get('/logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'User\DashboardController@index')->name('user.dashboard');

    Route::get('/profile', 'User\ProfileController@index')->name('user.profile');
    Route::post('/profile/updatepassword', 'User\ProfileController@updatepassword')->name('user.profile.updatepassword');

    Route::get('/membership', 'User\MembershipController@index')->name('user.membership');

    Route::get('/campaign', 'User\CampaignController@index')->name('user.campaign');
    Route::get('/campaign/detail', 'User\CampaignController@detail')->name('user.campaign.detail');
    Route::get('/campaign/create', 'User\CampaignController@create')->name('user.campaign.create');
});

// Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
//     Route::get('/', 'HomeController@index')->name('home');

//     Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

//     Route::resource('permissions', 'PermissionsController');

//     Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

//     Route::resource('roles', 'RolesController');

//     Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

//     Route::resource('users', 'UsersController');

//     Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

//     Route::resource('products', 'ProductsController');
// });

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['checkMiddleware']], function () {
    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');
    Route::post('/users/getUserList', 'UsersController@getUserList')->name('users.getUserList');

    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');

    Route::resource('products', 'ProductsController');
});
