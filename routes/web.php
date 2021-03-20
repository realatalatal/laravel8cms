<?php

use App\Models\Development;
use App\Models\Network;
use App\Models\Server;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// ADMIN ROUTES START HERE
Route::get('/admin', function(){
  return redirect(route('admin.dashboard'));
});


//Admin Dashboard 
Route::name('admin.')->group(function() {
  
  //Admin Auth Routes
  Route::get('admin/enter', 'Admin\AuthController@showLoginForm')->name('login');
  Route::post('admin/enter', 'Admin\AuthController@login')->name('login.submit');
  Route::get('admin/exit', 'Admin\AuthController@logout')->name('logout');
  Route::get('admin/changePassword', 'Admin\PasswordController@showChangePassword')->name('password.change');
  Route::post('admin/changePassword', 'Admin\PasswordController@changePassword')->name('password.change.submit');

  
  Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('dashboard');

  // Slider Routes
  Route::resource('admin/slider', 'Admin\SliderController');

  // Client Routes
  Route::resource('admin/client', 'Admin\ClientController');

  // Testimonial Routes
  Route::resource('admin/testimonial', 'Admin\TestimonialController');

  // About Routes
  Route::name('about.')->group(function(){
    // Main About
    Route::get('admin/about', 'Admin\AboutController@index')->name('index');
    Route::patch('admin/about/{about}', 'Admin\AboutController@update')->name('update');

    // Organization Routes
    Route::get('admin/about/organization', 'Admin\OrganizationController@index')->name('organization');
    Route::patch('admin/about/organization/{organization}', 'Admin\OrganizationController@update')->name('organization.update');

    // Collaboration Routes
    Route::get('admin/about/collaboration', 'Admin\CollaborationController@index')->name('collaboration');
    Route::patch('admin/about/collaboration/{collaboration}', 'Admin\CollaborationController@update')->name('collaboration.update');

    // Aim Routes
    Route::get('admin/about/aim', 'Admin\AimController@index')->name('aim');
    Route::patch('admin/about/aim/{aim}', 'Admin\AimController@update')->name('aim.update');

  });

  // Info
  Route::get('admin/info', 'Admin\InfoController@index')->name('info.index');
  Route::patch('admin/info/{info}', 'Admin\InfoController@update')->name('info.update');


  // Contact Routes
  Route::get('contacts', 'Admin\ContactController@index')->name('contact.index');
  Route::delete('contact/{contact}', 'Admin\ContactController@destroy')->name('contact.destroy');
  

  // Services Routes
  // All Services
  Route::resource('admin/service', 'Admin\ServiceController');
  
  Route::name('service.')->group(function(){ 

    // IT Services
    Route::get('admin/service/special/network', 'Admin\NetworkController@index')->name('network.index');
    Route::patch('admin/service/special/network/{network}', 'Admin\NetworkController@update')->name('network.update');

    // Development Services
    Route::get('admin/service/special/development', 'Admin\DevelopmentController@index')->name('development.index');
    Route::patch('admin/service/special/development/{development}', 'Admin\DevelopmentController@update')->name('development.update');

    // Server (Hosting) Services
    Route::get('admin/service/special/server', 'Admin\ServerController@index')->name('server.index');
    Route::patch('admin/service/special/server/{server}', 'Admin\ServerController@update')->name('server.update');
  });
  
});