<?php

use App\Http\Controllers\Admin\WebsiteVisitorsController;
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



Route::group(
[   'middleware' => ['auth'],
    'prefix' => 'dit/site',
], function () {

  Route::get('/landing', 'Admin\LandingController@index')->name('landing');

});

/*
|--------------------------------------------------------------------------
| User Management Routes
|--------------------------------------------------------------------------
*/
Route::group(
[   'middleware' => ['auth','role:Admin'],
    'prefix' => 'dit/site/users',
], function () {

    Route::get('/', 'Admin\UsersController@index')
         ->name('admin.user.index');

    Route::get('/create','Admin\UsersController@create')
         ->name('admin.user.create');

    Route::get('/show/{user}','Admin\UsersController@show')
         ->name('admin.user.show')
         ->where('id', '[0-9]+');

    Route::get('/{user}/edit','Admin\UsersController@edit')
         ->name('admin.user.edit');

    Route::get('/{user}/edit_role','Admin\UsersController@edit_role')
        ->name('admin.user.edit_role');

    Route::post('/', 'Admin\UsersController@store')
         ->name('admin.user.store');

    Route::put('user/{user}', 'Admin\UsersController@update')
         ->name('admin.user.update');

     Route::put('user_role/{user}', 'Admin\UsersController@update_role')
          ->name('admin.user.update_role');

    Route::post('/user/{user}','Admin\UsersController@destroy')
         ->name('admin.user.destroy');

    Route::get('/users','Admin\UsersController@getData')
        ->name('admin.user.data');
});

Route::group(
[   'middleware' => ['auth','role:Admin'],
    'prefix' => 'dit/site/roles',
], function () {

    Route::get('/', 'Admin\RolesController@index')
         ->name('admin.role.index');

    Route::get('/create','Admin\RolesController@create')
         ->name('admin.role.create');

    Route::get('/show/{role}','Admin\RolesController@show')
         ->name('admin.role.show');

    Route::get('/{role}/edit','Admin\RolesController@edit')
         ->name('admin.role.edit');

    Route::post('/', 'Admin\RolesController@store')
         ->name('admin.role.store');

    Route::put('role/{role}', 'Admin\RolesController@update')
         ->name('admin.role.update');

    Route::post('/role/{role}','Admin\RolesController@destroy')
         ->name('admin.role.destroy');

    Route::get('/roles','Admin\RolesController@getData')
          ->name('admin.role.data');
});

Route::group(
[
  'middleware' => ['auth','role:Admin'],
  'prefix' => 'dit/site/permissions',
], function () {

  Route::get('/', 'Admin\PermissionsController@index')
       ->name('admin.permission.index');

  Route::get('/create','Admin\PermissionsController@create')
       ->name('admin.permission.create');

  Route::get('/show/{permission}','Admin\PermissionsController@show')
       ->name('admin.permission.show');

  Route::get('/{permission}/edit','Admin\PermissionsController@edit')
       ->name('admin.permission.edit');

  Route::post('/', 'Admin\PermissionsController@store')
       ->name('admin.permission.store');

  Route::put('permission/{permission}', 'Admin\PermissionsController@update')
       ->name('admin.permission.update');

  Route::post('/permission/{permission}','Admin\PermissionsController@destroy')
       ->name('admin.permission.destroy');

   Route::get('/permissions','Admin\PermissionsController@getData')
       ->name('admin.permission.data');
});

/*
|--------------------------------------------------------------------------
| Geographical Management Routes
|--------------------------------------------------------------------------
*/
Route::group(
[
    'middleware' => ['auth','role:Admin|Webmaster'],
    'prefix' => 'dit/site/countries',
], function () {

    Route::get('/', 'Location\CountriesController@index')
         ->name('admin.country.index');

    Route::get('/create','Location\CountriesController@create')
         ->name('admin.country.create');

    Route::get('/show/{country}','Location\CountriesController@show')
         ->name('admin.country.show')
         ->where('id', '[0-9]+');

    Route::get('/{country}/edit','Location\CountriesController@edit')
         ->name('admin.country.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Location\CountriesController@store')
         ->name('admin.country.store');

    Route::put('country/{country}', 'Location\CountriesController@update')
         ->name('admin.country.update')
         ->where('id', '[0-9]+');

    Route::post('/country/{country}','Location\CountriesController@destroy')
         ->name('admin.country.destroy')
         ->where('id', '[0-9]+');

    Route::get('/countries','Location\CountriesController@getData')
          ->name('admin.country.data');
});

Route::group(
[
    'middleware' => ['auth','role:Admin|Webmaster'],
    'prefix' => 'dit/site/regions',
], function () {

    Route::get('/', 'Location\RegionsController@index')
         ->name('admin.region.index');

    Route::get('/create','Location\RegionsController@create')
         ->name('admin.region.create');

    Route::get('/show/{region}','Location\RegionsController@show')
         ->name('admin.region.show')
         ->where('id', '[0-9]+');

    Route::get('/{region}/edit','Location\RegionsController@edit')
         ->name('admin.region.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Location\RegionsController@store')
         ->name('admin.region.store');

    Route::put('region/{region}', 'Location\RegionsController@update')
         ->name('admin.region.update')
         ->where('id', '[0-9]+');

    Route::post('/region/{region}','Location\RegionsController@destroy')
         ->name('admin.region.destroy')
         ->where('id', '[0-9]+');

    Route::get('/regions','Location\RegionsController@getData')
          ->name('admin.region.data');
});

Route::group(
[
    'middleware' => ['auth','role:Admin|Webmaster'],
    'prefix' => 'dit/site/districts',
], function () {

    Route::get('/', 'Location\DistrictsController@index')
         ->name('admin.district.index');

    Route::get('/create','Location\DistrictsController@create')
         ->name('admin.district.create');

    Route::get('/show/{district}','Location\DistrictsController@show')
         ->name('admin.district.show')
         ->where('id', '[0-9]+');

    Route::get('/{district}/edit','Location\DistrictsController@edit')
         ->name('admin.district.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Location\DistrictsController@store')
         ->name('admin.district.store');

    Route::put('district/{district}', 'Location\DistrictsController@update')
         ->name('admin.district.update')
         ->where('id', '[0-9]+');

    Route::post('/district/{district}','Location\DistrictsController@destroy')
         ->name('admin.district.destroy')
         ->where('id', '[0-9]+');

    Route::get('/districts','Location\DistrictsController@getData')
          ->name('admin.district.data');
});

Route::group(
[
    'middleware' => ['auth','role:Admin|Webmaster'],
    'prefix' => 'dit/site/wards',
], function () {

    Route::get('/', 'Location\WardsController@index')
         ->name('admin.ward.index');

    Route::get('/create','Location\WardsController@create')
         ->name('admin.ward.create');

    Route::get('/show/{ward}','Location\WardsController@show')
         ->name('admin.ward.show')
         ->where('id', '[0-9]+');

    Route::get('/{ward}/edit','Location\WardsController@edit')
         ->name('admin.ward.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'Location\WardsController@store')
         ->name('admin.ward.store');

    Route::put('ward/{ward}', 'Location\WardsController@update')
         ->name('admin.ward.update')
         ->where('id', '[0-9]+');

    Route::post('/ward/{ward}','Location\WardsController@destroy')
         ->name('admin.ward.destroy')
         ->where('id', '[0-9]+');

    Route::get('/wards','Location\WardsController@getData')
          ->name('admin.ward.data');

 });




 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/quick-links',
 ], function () {

     Route::get('/', 'Admin\QuickLinksController@index')
          ->name('admin.quick_link.index');

     Route::get('/create','Admin\QuickLinksController@create')
          ->name('admin.quick_link.create');

     Route::get('/show/{quickLink}','Admin\QuickLinksController@show')
          ->name('admin.quick_link.show')
          ->where('id', '[0-9]+');

     Route::get('/{quickLink}/edit','Admin\QuickLinksController@edit')
          ->name('admin.quick_link.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\QuickLinksController@store')
          ->name('admin.quick_link.store');

     Route::put('quick_link/{quickLink}', 'Admin\QuickLinksController@update')
          ->name('admin.quick_link.update')
          ->where('id', '[0-9]+');

     Route::post('/quick_link/{quickLink}','Admin\QuickLinksController@destroy')
          ->name('admin.quick_link.destroy')
          ->where('id', '[0-9]+');

    Route::get('/quick_link/get-data','Admin\QuickLinksController@getData')
         ->name('admin.quick_link.data');

 });

 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/sliders',
 ], function () {

     Route::get('/', 'Admin\SlidersController@index')
          ->name('admin.slider.index');

     Route::get('/create','Admin\SlidersController@create')
          ->name('admin.slider.create');

     Route::get('/show/{slider}','Admin\SlidersController@show')
          ->name('admin.slider.show')
          ->where('id', '[0-9]+');

     Route::get('/{slider}/edit','Admin\SlidersController@edit')
          ->name('admin.slider.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\SlidersController@store')
          ->name('admin.slider.store');

     Route::put('slider/{slider}', 'Admin\SlidersController@update')
          ->name('admin.slider.update')
          ->where('id', '[0-9]+');

    Route::get('get-slider-data', 'Admin\SlidersController@getData')
         ->name('admin.slider.data');

     Route::post('/slider/{slider}','Admin\SlidersController@destroy')
          ->name('admin.slider.destroy')
          ->where('id', '[0-9]+');

 });

 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/events',
 ], function () {

     Route::get('/', 'Admin\EventsController@index')
          ->name('admin.event.index');

     Route::get('/create','Admin\EventsController@create')
          ->name('admin.event.create');

     Route::get('/show/{event}','Admin\EventsController@show')
          ->name('admin.event.show')
          ->where('id', '[0-9]+');

     Route::get('/{event}/edit','Admin\EventsController@edit')
          ->name('admin.event.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\EventsController@store')
          ->name('admin.event.store');

     Route::put('event/{event}', 'Admin\EventsController@update')
          ->name('admin.event.update')
          ->where('id', '[0-9]+');

    Route::get('get-event-data', 'Admin\EventsController@getData')
         ->name('admin.event.data');

     Route::post('/event/{event}','Admin\EventsController@destroy')
          ->name('admin.event.destroy')
          ->where('id', '[0-9]+');

 });

 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/news',
 ], function () {

     Route::get('/', 'Admin\NewsController@index')
          ->name('admin.news.index');

     Route::get('/create','Admin\NewsController@create')
          ->name('admin.news.create');

     Route::get('/show/{news}','Admin\NewsController@show')
          ->name('admin.news.show')
          ->where('id', '[0-9]+');

     Route::get('/{news}/edit','Admin\NewsController@edit')
          ->name('admin.news.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\NewsController@store')
          ->name('admin.news.store');

     Route::put('news/{news}', 'Admin\NewsController@update')
          ->name('admin.news.update')
          ->where('id', '[0-9]+');

    Route::get('get-news-data', 'Admin\NewsController@getData')
         ->name('admin.news.data');

     Route::post('/news/{news}','Admin\NewsController@destroy')
          ->name('admin.news.destroy')
          ->where('id', '[0-9]+');

 });

 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/departments',
 ], function () {

     Route::get('/', 'Admin\DepartmentsController@index')
          ->name('admin.department.index');

     Route::get('/create','Admin\DepartmentsController@create')
          ->name('admin.department.create');

     Route::get('/show/{department}','Admin\DepartmentsController@show')
          ->name('admin.department.show')
          ->where('id', '[0-9]+');

     Route::get('/{department}/edit','Admin\DepartmentsController@edit')
          ->name('admin.department.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\DepartmentsController@store')
          ->name('admin.department.store');

     Route::put('department/{department}', 'Admin\DepartmentsController@update')
          ->name('admin.department.update')
          ->where('id', '[0-9]+');

     Route::get('get-departments-data', 'Admin\DepartmentsController@getData')
         ->name('admin.department.data');

     Route::post('/department/{department}','Admin\DepartmentsController@destroy')
          ->name('admin.department.destroy')
          ->where('id', '[0-9]+');

 });



 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/staff',
 ], function () {

     Route::get('/', 'Admin\StaffController@index')
          ->name('admin.staff.index');

     Route::get('/create','Admin\StaffController@create')
          ->name('admin.staff.create');

     Route::get('/show/{staff}','Admin\StaffController@show')
          ->name('admin.staff.show')
          ->where('id', '[0-9]+');

     Route::get('/{staff}/edit','Admin\StaffController@edit')
          ->name('admin.staff.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\StaffController@store')
          ->name('admin.staff.store');

     Route::put('staff/{staff}', 'Admin\StaffController@update')
          ->name('admin.staff.update')
          ->where('id', '[0-9]+');

      Route::get('get-staff-data', 'Admin\StaffController@getData')
          ->name('admin.staff.data');

     Route::post('/staff/{staff}','Admin\StaffController@destroy')
          ->name('admin.staff.destroy')
          ->where('id', '[0-9]+');

 });


 Route::group(
 [
      'middleware' => ['auth','role:Admin|Webmaster'],
      'prefix' => 'admin/dit-site/education',
 ], function () {

     Route::get('/', 'Admin\EducationController@index')
          ->name('admin.education.index');

     Route::get('/create','Admin\EducationController@create')
          ->name('admin.education.create');

     Route::get('/show/{education}','Admin\EducationController@show')
          ->name('admin.education.show')
          ->where('id', '[0-9]+');

     Route::get('/{education}/edit','Admin\EducationController@edit')
          ->name('admin.education.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\EducationController@store')
          ->name('admin.education.store');

     Route::put('education/{education}', 'Admin\EducationController@update')
          ->name('admin.education.update')
          ->where('id', '[0-9]+');

    Route::get('get-educations-data', 'Admin\EducationController@getData')
        ->name('admin.education.data');

     Route::post('/education/{education}','Admin\EducationController@destroy')
          ->name('admin.education.destroy')
          ->where('id', '[0-9]+');

 });

 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/skills',
 ], function () {

     Route::get('/', 'Admin\SkillsController@index')
          ->name('admin.skill.index');

     Route::get('/create','Admin\SkillsController@create')
          ->name('admin.skill.create');

     Route::get('/show/{skill}','Admin\SkillsController@show')
          ->name('admin.skill.show')
          ->where('id', '[0-9]+');

     Route::get('/{skill}/edit','Admin\SkillsController@edit')
          ->name('admin.skill.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\SkillsController@store')
          ->name('admin.skill.store');

     Route::get('get-skill-data', 'Admin\SkillsController@getData')
        ->name('admin.skill.data');

     Route::put('skill/{skill}', 'Admin\SkillsController@update')
          ->name('admin.skill.update')
          ->where('id', '[0-9]+');

     Route::post('/skill/{skill}','Admin\SkillsController@destroy')
          ->name('admin.skill.destroy')
          ->where('id', '[0-9]+');

 });

 Route::group(
 [
      'middleware' => ['auth','role:Admin|Webmaster'],
      'prefix' => 'admin/dit-site/experience',
 ], function () {

     Route::get('/', 'Admin\ExperiencesController@index')
          ->name('admin.experience.index');

     Route::get('/create','Admin\ExperiencesController@create')
          ->name('admin.experience.create');

     Route::get('/show/{experience}','Admin\ExperiencesController@show')
          ->name('admin.experience.show')
          ->where('id', '[0-9]+');

     Route::get('/{experience}/edit','Admin\ExperiencesController@edit')
          ->name('admin.experience.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\ExperiencesController@store')
          ->name('admin.experience.store');

     Route::get('get-experiences-data', 'Admin\ExperiencesController@getData')
          ->name('admin.experience.data');

     Route::put('experience/{experience}', 'Admin\ExperiencesController@update')
          ->name('admin.experience.update')
          ->where('id', '[0-9]+');

     Route::post('/experience/{experience}','Admin\ExperiencesController@destroy')
          ->name('admin.experience.destroy')
          ->where('id', '[0-9]+');

 });



 Route::group(
 [
     'middleware' => ['auth','role:Admin|Webmaster'],
     'prefix' => 'admin/dit-site/programme',
 ], function () {

     Route::get('/', 'Admin\ProgrammesController@index')
          ->name('admin.programme.index');

     Route::get('/create','Admin\ProgrammesController@create')
          ->name('admin.programme.create');

     Route::get('/show/{programme}','Admin\ProgrammesController@show')
          ->name('admin.programme.show')
          ->where('id', '[0-9]+');

     Route::get('/{programme}/edit','Admin\ProgrammesController@edit')
          ->name('admin.programme.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\ProgrammesController@store')
          ->name('admin.programme.store');

     Route::get('get-programme-data', 'Admin\ProgrammesController@getData')
           ->name('admin.programme.data');


     Route::put('programme/{programme}', 'Admin\ProgrammesController@update')
          ->name('admin.programme.update')
          ->where('id', '[0-9]+');

     Route::post('/programme/{programme}','Admin\ProgrammesController@destroy')
          ->name('admin.programme.destroy')
          ->where('id', '[0-9]+');

 });

 Route::group(
 [
      'middleware' => ['auth','role:Admin|Webmaster'],
      'prefix' => 'admin/dit-site/short-course',
 ], function () {

     Route::get('/', 'Admin\ShortCoursesController@index')
          ->name('admin.short_course.index');

     Route::get('/create','Admin\ShortCoursesController@create')
          ->name('admin.short_course.create');

     Route::get('/show/{shortCourse}','Admin\ShortCoursesController@show')
          ->name('admin.short_course.show')
          ->where('id', '[0-9]+');

     Route::get('/{shortCourse}/edit','Admin\ShortCoursesController@edit')
          ->name('admin.short_course.edit')
          ->where('id', '[0-9]+');

     Route::post('/', 'Admin\ShortCoursesController@store')
          ->name('admin.short_course.store');

     Route::get('get-short_course-data', 'Admin\ShortCoursesController@getData')
          ->name('admin.short_course.data');

     Route::put('short_course/{shortCourse}', 'Admin\ShortCoursesController@update')
          ->name('admin.short_course.update')
          ->where('id', '[0-9]+');

     Route::post('/short_course/{shortCourse}','Admin\ShortCoursesController@destroy')
          ->name('admin.short_course.destroy')
          ->where('id', '[0-9]+');

 });


 Route::group(
     [
          'middleware' => ['auth','role:Admin|Webmaster'],
          'prefix' => 'website-visitors',
     ], function () {
          Route::get('/',[WebsiteVisitorsController::class,'index'])->name('website-visitors.index');
          Route::get('website-visitors',[WebsiteVisitorsController::class,'getVisitorsAll'])->name('visitors.data.all');

          Route::get('/today',[WebsiteVisitorsController::class,'todayVisitors'])->name('website-visitors.today');
          Route::get('/today_data',[WebsiteVisitorsController::class,'getVisitorsToday'])->name('visitors.data.today');

          Route::get('/this_week',[WebsiteVisitorsController::class,'thisWeekVisitors'])->name('website-visitors.week');
          Route::get('/this_week_data',[WebsiteVisitorsController::class,'getVisitorsThisWeek'])->name('visitors.data.week');

          Route::get('/this_month',[WebsiteVisitorsController::class,'thisMonthVisitors'])->name('website-visitors.month');
          Route::get('/this_month_data',[WebsiteVisitorsController::class,'getVisitorsThisMonth'])->name('visitors.data.month');
         
     });
    
